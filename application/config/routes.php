<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
$route['default_controller'] = 'Auth';

$route['auth'] = 'Auth';

// ------------------------------------------------------------------------
// Admin
// ------------------------------------------------------------------------
$route['admin/dashboard']                                   = 'Admin/DashboardController';

$route['admin/peserta']                                     = 'Admin/PesertaController';
$route['admin/peserta/add']                                 = 'Admin/PesertaController/add';
$route['admin/peserta/find']                                = 'Admin/PesertaController/find';
$route['admin/peserta/detail']                              = 'Admin/PesertaController/detail';
$route['admin/peserta/update']                              = 'Admin/PesertaController/update';
$route['admin/peserta/import']                              = 'Admin/PesertaController/import';
$route['admin/peserta/print/(:any)']                        = 'Admin/PesertaController/print/$1';

// ------------------------------------------------------------------------
// User
// ------------------------------------------------------------------------
$route['user/dashboard']                                   = 'User/DashboardController';

$route['user/peserta']                                     = 'User/PesertaController';
$route['user/peserta/add']                                 = 'User/PesertaController/add';
$route['user/peserta/find']                                = 'User/PesertaController/find';
$route['user/peserta/detail']                              = 'User/PesertaController/detail';
$route['user/peserta/update']                              = 'User/PesertaController/update';
$route['user/peserta/import']                              = 'User/PesertaController/import';
$route['user/peserta/print/(:any)']                        = 'User/PesertaController/print/$1';

$route['profile/edit']                                      = 'ProfileController/edit';
$route['profile/update']                                    = 'ProfileController/update';
$route['profile/changepassword']                            = 'ProfileController/changepassword';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
