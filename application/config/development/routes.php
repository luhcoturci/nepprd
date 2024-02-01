<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['admin'] = 'admin/dash';
$route['admin/new/(:any)'] = 'admin/dash/pagination';
$route['admin/new'] = 'admin/dash/pagination';
$route['home/page/(:any)'] = 'home';
$route['home/page'] = 'home';
$route['home/index/(:any)'] = 'home';
$route['search'] = 'home/search';

$route['enquiry/(:any)'] = 'home/enquiry/$1';

$route['check']= 'home/check_enquiry';

$route['en']= 'home/ChangeLanguage/en';
$route['tt']= 'home/ChangeLanguage/tt';
$route['id']= 'home/ChangeLanguage/id';

//home/check_enquiry

/*
$route['admin/category'] = 'admin/category';
$route['admin/user/(:any)'] = 'admin/user/$1';
$route['admin/user'] = 'admin/user';
$route['admin/(:any)'] = 'admin/dash/$1';
$route['admin/(:any)/(:any)'] = 'admin/dash/$1/$2';
*/
