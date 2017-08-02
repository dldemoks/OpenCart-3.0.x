<?php
// Heading
$_['heading_title'] = 'Payeer';

// Text 
$_['text_enabled'] = 'Enabled';
$_['text_disabled'] = 'Disabled';
$_['text_payment'] = 'Payment';
$_['text_edit'] = 'Payeer module change';
$_['text_success'] = 'Settings module updated!';
$_['text_payeer'] = '<a target="_blank" href="https://www.payeer.com"><img src="view/image/payment/payeer.png" alt="Payeer" title="Payeer" /></a>';

// Entry
$_['entry_url'] = 'URL merchant';
$_['entry_merchant'] = 'ID shop';
$_['entry_security'] = 'Secret key';
$_['entry_geo_zone'] = 'Geo zone';
$_['entry_status'] = 'Status';
$_['entry_order_wait'] = 'Status of waiting for payment';
$_['entry_order_success'] = 'Status successful payment';
$_['entry_order_fail'] = 'Status fail payment';
$_['entry_sort_order'] = 'Sorting order';
$_['entry_log'] = 'The path to the transaction log';
$_['entry_list_ip'] = 'IP Filter incoming requests';
$_['entry_admin_email'] = 'E-mail alert for Error';

// Help
$_['help_url'] = 'URL for the payment system Payeer';
$_['help_merchant'] = 'Store identifier registered in the payment system Payeer';
$_['help_security'] = 'The secret key warning on the implementation of payment , which is used to verify the integrity of the information received and unambiguous identification of the sender. It must match with a secret key that is specified in your account Payeer';
$_['help_log'] = 'The path to the file , where it will be stored in the entire history of payment Payeer';
$_['help_list_ip'] = 'List of Trusted IP supporting the mask ( for example : 123.456.78.90, 123.456. *. *)';
$_['help_admin_email'] = 'E-mail administrator for error reporting payment';

// Error
$_['error_permission'] = 'You are not allowed to control this unit!';
$_['error_url'] = 'URL merchant is required!';
$_['error_merchant'] = 'You must specify the ID of the store!';
$_['error_security'] = 'You must specify the secret code!';