<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login']['get'] = 'auth';
$route['register']['get'] = 'auth/register';
$route['credit']['get'] = 'Creditpayment';
$route['deposit']['get'] = 'Bankpayment';
$route['/delete/custumerDetail/(:any)'] = 'Customer/delete_customer/$1';


