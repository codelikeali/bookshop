<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'UsersController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['home'] = 'UsersController';


//Users
$route['user-dashboard'] = 'UsersController/dashboard';



//AUTH

$route['login'] = 'AuthController/login';
$route['register'] = 'AuthController/register';
$route['updatePass'] = 'AuthController/login';
$route['logout'] = 'AuthController/logout';
$route['register-user'] = 'AuthController/register_by_admin';
$route['UpdatePass'] = 'AuthController/UpdatePass';

//admin
$route['admin'] = 'AdminController/dashboard';
$route['dashboard_data'] = 'AdminController/fetch';


// Books & Category
$route['books'] = 'BookController/index';
$route['category'] = 'BookController/category';
$route['add_category'] = 'BookController/add_category';
$route['add_book'] = 'BookController/add_book';
$route['delete_category'] = 'BookController/delete_category';
$route['delete_Book'] = 'BookController/delete_Book';
$route['userOrder'] = 'BookController/userOrder';
$route['send_order'] = 'BookController/send_order';

//users
$route['admin_users'] = 'BookController/admin_users';
$route['delete_user'] = 'BookController/delete_user';
// $route['delete-category'] = 'BookController/delete-category';



//Order Users

$route['create_order'] = 'OrderController/create_order';