<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login'] = 'login_ctrl';
$route['api/item/(:num)'] = "api/item/$1";
$route['eod/submission/(:num)'] = "eod/submission/$1";
$route['eod/edit_eod/(:num)'] = "eod/edit_eod/$1";
