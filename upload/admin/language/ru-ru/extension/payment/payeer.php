<?php
// Heading
$_['heading_title'] = 'Payeer';

// Text
$_['text_payeer'] = '<a target="_blank" href="https://www.payeer.com"><img src="view/image/payment/payeer.png" alt="Payeer" title="Payeer" /></a>';
$_['text_edit'] = 'Редактирование модуля оплаты Payeer';
$_['text_enabled'] = 'Включено';
$_['text_disabled'] = 'Отключено';
$_['text_pay'] = 'Payeer';
$_['text_payment'] = 'Оплата';
$_['text_success'] = 'Настройки модуля обновлены';

// Entry
$_['entry_status'] = 'Включить прием оплаты через Payeer';
$_['h_entry_status'] = 'Включить модуль оплаты Payeer';
$_['entry_url'] = 'URL мерчанта';
$_['h_entry_url'] = 'URL для оплаты в системе Payeer';
$_['entry_merchant'] = 'Идентификатор магазина';
$_['h_entry_merchant'] = 'Идентификатор магазина, зарегистрированного в платежной системе Payeer';
$_['entry_security'] = 'Секретный ключ';
$_['h_entry_security'] = 'Секретный ключ оповещения о выполнении платежа, который используется для проверки целостности полученной информации и однозначной идентификации отправителя. Должен совпадать с секретным ключем, указанным в личном кабинете Payeer';
$_['entry_logfile'] = 'Путь к журналу транзакций';
$_['h_entry_logfile'] = 'Путь к файлу, где будет сохраняться вся история оплаты в Payeer';
$_['entry_ipfilter'] = 'IP фильтр входящих запросов';
$_['h_entry_ipfilter'] = 'Список доверенных IP с поддержкой маски (Например: 123.456.78.90, 123.456.*.*)';
$_['entry_email'] = 'E-mail для оповещения об ошибках';
$_['h_entry_email'] = 'E-mail администратора для оповещения об ошибках оплаты';
$_['entry_order_wait'] = 'Статус ожидания оплаты';
$_['entry_order_success'] = 'Статус успешной оплаты';
$_['entry_order_fail'] = 'Статус неудачной оплаты';
$_['entry_geo_zone'] = 'Географическая зона';
$_['entry_sort_order'] = 'Порядок сортировки';

// Error
$_['error_permission'] = 'У Вас нет прав для управления этим модулем';
$_['error_url'] = 'Необходимо указать URL мерчанта';
$_['error_merchant'] = 'Необходимо указать идентификатор магазина';
$_['error_security'] = 'Необходимо указать секретный код';