<?php
// Heading
$_['heading_title'] = 'Payeer';

// Text
$_['text_payeer'] = '<a target="_blank" href="https://www.payeer.com"><img src="view/image/payment/payeer.png" alt="Payeer" title="Payeer" /></a>';
$_['text_edit'] = 'Editing the Payeer payment module';
$_['text_enabled'] = 'Enabled';
$_['text_disabled'] = 'Disabled';
$_['text_pay'] = 'Payeer';
$_['text_payment'] = 'Payment';
$_['text_success'] = 'The module settings have been updated';

// Entry
$_['entry_status'] = 'Enable payment acceptance via Payeer';
$_['h_entry_status'] = 'Enable the Payeer payment module';
$_['entry_url'] = 'Merchant URL';
$_['h_entry_url'] = 'URL for payment in the Payeer';
$_['entry_merchant'] = 'Store ID';
$_['h_entry_merchant'] = 'The ID of the store registered in the Payeer payment system';
$_['entry_security'] = 'Secret key';
$_['h_entry_security'] = 'The secret key of notification of payment execution, which is used to verify the integrity of the received information and unambiguous identification of the sender. It must match the secret key specified in the Payeer personal account';
$_['entry_logfile'] = 'The path to the transaction log';
$_['h_entry_logfile'] = 'The path to the file where the entire payment history will be saved in Payeer';
$_['entry_ipfilter'] = 'IP filter for incoming requests';
$_['h_entry_ipfilter'] = 'A list of trusted IP addresses with mask support (for example: 123.456.78.90, 123.456.*.*)';
$_['entry_email'] = 'E-mail for notification of errors';
$_['h_entry_email'] = 'E-mail for notification of payment errors';
$_['entry_order_wait'] = 'Payment waiting status';
$_['entry_order_success'] = 'Successful payment status';
$_['entry_order_fail'] = 'Failed payment status';
$_['entry_geo_zone'] = 'Geographical area';
$_['entry_sort_order'] = 'Sorting order';

// Error
$_['error_permission'] = 'You are not allowed to control this unit';
$_['error_url'] = 'URL merchant is required';
$_['error_merchant'] = 'You must specify the ID of the store';
$_['error_security'] = 'You must specify the secret code';