<?php
class ControllerExtensionPaymentPayeer extends Controller {
  public $version = '3.0.3.8';
  private $error = array();
  private $text_data = array(
    'heading_title',
    'text_payeer',
    'text_edit',
    'text_enabled',
    'text_disabled',
    'text_all_zones',
    'text_pay',
    'entry_status',
    'h_entry_status',
    'entry_url',
    'h_entry_url',
    'entry_merchant',
    'h_entry_merchant',
    'entry_security',
    'h_entry_security',
    'entry_logfile',
    'h_entry_logfile',
    'entry_ipfilter',
    'h_entry_ipfilter',
    'entry_email',
    'h_entry_email',
    'entry_order_wait_id',
    'entry_order_success',
    'entry_order_fail',
    'entry_geo_zone',
    'entry_sort_order',
    'button_save',
    'button_cancel'
  );
  private $error_data = array(
    'warning',
    'url',
    'merchant',
    'security'
  );
  private $post_data = array(
    'status',
    'url',
    'merchant',
    'security',
    'logfile',
    'ipfilter',
    'email',
    'order_wait_id',
    'order_success_id',
    'order_fail_id',
    'geo_zone_id',
    'sort_order'
  );
  public $statuses = [
    'payment_payeer_order_wait_id' => ['language_id' => 1,'name' => 'Wait (Payeer)'],
    'payment_payeer_order_success_id' => ['language_id' => 1,'name' => 'Success (Payeer)'],
    'payment_payeer_order_fail_id' => ['language_id' => 1,'name' => 'Fail (Payeer)']
  ];

  public function __construct($registry) {
    parent::__construct($registry);
    $this->load->language('extension/payment/payeer');
    $this->document->setTitle($this->language->get('heading_title'));
  }

  public function index() {
    $this->load->language('extension/payment/payeer');
    $this->document->setTitle($this->language->get('heading_title'));
    $this->load->model('setting/setting');
    $this->load->model('localisation/currency');
    if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
      $this->model_setting_setting->editSetting('payment_payeer', $this->request->post);
      $this->session->data['success'] = $this->language->get('text_success');
      $this->response->redirect($this->makeUrl('extension/payment/payeer'));
    }

    foreach ($this->text_data as $value) {
      $data[$value] = $this->language->get($value);
    }

    foreach ($this->error_data as $value) {
      if (isset($this->error[$value])) {
        $data['error_'.$value] = $this->error[$value];
      } else {
        $data['error_'.$value] = '';
      }
    }

    $data['breadcrumbs'] = array();

    $data['breadcrumbs'][] = array(
      'text' => $this->language->get('text_home'),
      'href' => $this->makeUrl('common/dashboard')
    );

    $data['breadcrumbs'][] = array(
      'text' => $this->language->get('text_payment'),
      'href' => $this->makeUrl('marketplace/extension')
    );

    $data['breadcrumbs'][] = array(
      'text' => $this->language->get('heading_title'),
      'href' => $this->makeUrl('extension/payment/payeer')
    );

    if(!empty($this->session->data['success'])){
      $data['success'] = $this->session->data['success'];
      unset($this->session->data['success']);
    }

    $data['action'] = $this->makeUrl('extension/payment/payeer');
    $data['cancel'] = $this->makeUrl('marketplace/extension');
    $this->load->model('localisation/order_status');
    $this->load->model('localisation/geo_zone');

    $data['order_statuses'] = $this->model_localisation_order_status->getOrderStatuses();
    $data['geo_zones'] = $this->model_localisation_geo_zone->getGeoZones();

    foreach ($this->post_data as $value) {
      if (isset($this->request->post['payment_payeer_'.$value])) {
        $data['payment_payeer_'.$value] = $this->request->post['payment_payeer_'.$value];
      } else {
        $data['payment_payeer_'.$value] = $this->config->get('payment_payeer_'.$value);
      }
    }

    $payment_payeer_url_val = $this->config->get('payment_payeer_url');
    if(!isset($payment_payeer_name_val)){
      $data['payment_payeer_url'] = 'https://payeer.com/merchant/';
    }

    $data['header'] = $this->load->controller('common/header');
    $data['column_left'] = $this->load->controller('common/column_left');
    $data['footer'] = $this->load->controller('common/footer');
    $this->response->setOutput($this->load->view('extension/payment/payeer', $data));
  }

  private function createOrderStatusesPayeer() {
    $this->model_extension_payment_payeer->updateTableStatusOrders();
    $this->model_extension_payment_payeer->addOrderStatus($this->statuses);
  }

  private function deleteOrderStatusesPayeer() {
    $this->model_extension_payment_payeer->deleteOrderStatus($this->statuses);
  }

  public function install() {
    $this->load->model('extension/payment/payeer');
    $this->createOrderStatusesPayeer();
  }

  public function uninstall() {
    $this->load->model('extension/payment/payeer');
    $this->deleteOrderStatusesPayeer();
  }

  protected function makeUrl($route, $url = '') {
    return str_replace('&amp;', '&', $this->url->link($route, $url . '&user_token=' . $this->session->data['user_token'], 'SSL'));
  }

  protected function validate() {
    if (!$this->user->hasPermission('modify', 'extension/payment/payeer')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}
		if (!$this->request->post['payment_payeer_url']) {
			$this->error['url'] = $this->language->get('error_url');
		}
		if (!$this->request->post['payment_payeer_merchant']) {
			$this->error['merchant'] = $this->language->get('error_merchant');
		}
		if (!$this->request->post['payment_payeer_security']) {
			$this->error['security'] = $this->language->get('error_security');
		}
    return !$this->error;
  }
}