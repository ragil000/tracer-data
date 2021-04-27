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
$route['default_controller'] = 'welcome';
$route['404_override'] = 'ErrorPage/page404';
$route['translate_uri_dashes'] = FALSE;

$route['register'] = 'back/auth/Login/register';
$route['register/create'] = 'back/auth/Login/create';

$route['login'] = 'back/auth/Login/index';
$route['login/auth'] = 'back/auth/Login/auth';
$route['logout'] = 'back/auth/Login/logout';

$route['dashboard'] = 'back/Dashboard/index';

// $route['importExcel'] = 'Welcome/importExcel';

$route['back/student'] = 'back/students/Student/index';
$route['back/student/create'] = 'back/students/Student/create';
$route['back/student/read/(:num)'] = 'back/students/Student/read/$1';
$route['back/student/update'] = 'back/students/Student/update';
$route['back/student/updateProfile'] = 'back/students/Student/updateProfile';
$route['back/student/updateParent'] = 'back/students/Student/updateParent';
$route['back/student/updateStudy'] = 'back/students/Student/updateStudy';
$route['back/student/updateArchievement'] = 'back/students/Student/updateArchievement';
$route['back/student/updateJob'] = 'back/students/Student/updateJob';
$route['back/student/updateStatus'] = 'back/students/Student/updateStatus';
$route['back/student/delete'] = 'back/students/Student/delete';
$route['back/student/(:any)'] = 'back/students/Student/index/$1';

$route['back/form'] = 'back/forms/Form/index';
$route['back/form/create'] = 'back/forms/Form/create';
$route['back/form/(:any)'] = 'back/forms/Form/index/$1';

$route['back/email'] = 'back/emails/Email/index';
$route['back/email/send'] = 'back/emails/Email/send';
$route['back/email/(:any)'] = 'back/emails/Email/index/$1';

$route['middle/form'] = 'middle/forms/Form/index';