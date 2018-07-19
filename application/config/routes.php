<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| | Examples:	my-controller/index	-> my_controller/index
|   my-controller/my-method	-> my_controller/my_method
*/

//Route for admin login
$route['admin-login']='Admin_controller';

//admin login check
$route['admin-login-check']='Admin_controller/admin_login_check';

//sign out
$route['sign-out']='Admin_controller/sign_out';
//Dashboard
$route['dashboard']='Admin_controller/dashboard';

//Add Portfolio
$route['add-portfolio']='Admin_controller/add_portfolio';
$route['save-portfolio']='Admin_controller/save_portfolio';

$route['manage-portfolio']='Admin_controller/manage_portfolio';

//Client section
$route['add-client']='Admin_controller/add_client';
$route['save-client']='Admin_controller/save_client';
$route['manage-clients']='Admin_controller/manage_clients';

//category Section
$route['add-category']='Admin_controller/add_category';
$route['save-category']='Admin_controller/save_category';
$route['manage-categroy']='Admin_controller/manage_category';

//$route['join_test']='Admin_controller/join_test';





$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
