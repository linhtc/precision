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
  |	http://codeigniter.com/user_guide/general/routing.html
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
//$route['default_controller'] = 'frontends/coming_soon';
//$route['404_override'] = '';
$route['404_override'] = 'errors/show_404';
$route['translate_uri_dashes'] = FALSE;

// frontend
$route['home'] = 'frontend/home/view';
$route['gioi-thieu'] = 'frontend/introduction/view';
$route['tin-tuc'] = 'frontend/news/view';
$route['tin-tuc/(:any)'] = 'frontend/news/view/$1';

$route['tai-lieu'] = 'frontend/document/view';
$route['tai-lieu/(:any)'] = 'frontend/document/view/$1';
$route['tai-lieu/(:any)/(:any)'] = 'frontend/document/view/$1/$2';
$route['tai-lieu/(:any)/(:any)/(:any)'] = 'frontend/document/view/$1/$2/$3';

$route['company'] = 'frontend/Company/view';
$route['products-services'] = 'frontend/ProductService/view';
$route['design-technology-transfer'] = 'frontend/TechnologyTransfer/view';
$route['gallery'] = 'frontend/Gallery/view';
$route['contacts'] = 'frontend/Contact/view';

$route['lop-moi'] = 'frontend/NewClass/view';
$route['hoc-phi'] = 'frontend/fee/view';
$route['muc-phi-nhan-lop'] = 'frontend/MinFee/view';
$route['tuyen-dung'] = 'frontend/recruit/view';
$route['tuyen-dung/(:any)'] = 'frontend/recruit/view/$1';
// $route['dang-ky'] = 'frontend/register/view';
$route['dang-ky/lam-gia-su'] = 'frontend/register/teacher';
$route['dang-ky/tim-gia-su'] = 'frontend/register/student';
$route['dang-ky/(:any)'] = 'frontend/register/$1';
$route['lien-he'] = 'frontend/contact/view';

// backend
$route['admin'] = 'admin/users/login';

$route['admin/manage-class/(:any)'] = "admin/ManageClass/$1";
$route['admin/manage-class/(:any)/(:any)'] = "admin/ManageClass/$1/$2";
$route['en/admin/manage-class/(:any)'] = "admin/ManageClass/$1";
$route['en/admin/manage-class/(:any)/(:any)'] = "admin/ManageClass/$1/$2";

$route['admin/manage-subject/(:any)'] = "admin/ManageSubject/$1";
$route['admin/manage-subject/(:any)/(:any)'] = "admin/ManageSubject/$1/$2";
$route['en/admin/manage-subject/(:any)'] = "admin/ManageSubject/$1";
$route['en/admin/manage-subject/(:any)/(:any)'] = "admin/ManageSubject/$1/$2";

$route['admin/manage-document/(:any)'] = "admin/ManageDocument/$1";
$route['admin/manage-document/(:any)/(:any)'] = "admin/ManageDocument/$1/$2";
$route['en/admin/manage-document/(:any)'] = "admin/ManageDocument/$1";
$route['en/admin/manage-document/(:any)/(:any)'] = "admin/ManageDocument/$1/$2";

$route['admin/manage-student-regis/(:any)'] = "admin/ManageStudentRegis/$1";
$route['admin/manage-student-regis/(:any)/(:any)'] = "admin/ManageStudentRegis/$1/$2";
$route['en/admin/manage-student-regis/(:any)'] = "admin/ManageStudentRegis/$1";
$route['en/admin/manage-student-regis/(:any)/(:any)'] = "admin/ManageStudentRegis/$1/$2";

$route['admin/manage-new-class/(:any)'] = "admin/ManageNewClass/$1";
$route['admin/manage-new-class/(:any)/(:any)'] = "admin/ManageNewClass/$1/$2";
$route['en/admin/manage-new-class/(:any)'] = "admin/ManageNewClass/$1";
$route['en/admin/manage-new-class/(:any)/(:any)'] = "admin/ManageNewClass/$1/$2";

$route['admin/manage-home/(:any)'] = "admin/ManageHome/$1";
$route['admin/manage-home/(:any)/(:any)'] = "admin/ManageHome/$1/$2";
$route['en/admin/manage-home/(:any)'] = "admin/ManageHome/$1";
$route['en/admin/manage-home/(:any)/(:any)'] = "admin/ManageHome/$1/$2";

$route['admin/manage-introduction/(:any)'] = "admin/ManageIntroduction/$1";
$route['admin/manage-introduction/(:any)/(:any)'] = "admin/ManageIntroduction/$1/$2";
$route['en/admin/manage-introduction/(:any)'] = "admin/ManageIntroduction/$1";
$route['en/admin/manage-introduction/(:any)/(:any)'] = "admin/ManageIntroduction/$1/$2";

$route['admin/manage-contact/(:any)'] = "admin/ManageContact/$1";
$route['admin/manage-contact/(:any)/(:any)'] = "admin/ManageContact/$1/$2";
$route['en/admin/manage-contact/(:any)'] = "admin/ManageContact/$1";
$route['en/admin/manage-contact/(:any)/(:any)'] = "admin/ManageContact/$1/$2";

$route['admin/manage-news/(:any)'] = "admin/ManageNews/$1";
$route['admin/manage-news/(:any)/(:any)'] = "admin/ManageNews/$1/$2";
$route['en/admin/manage-news/(:any)'] = "admin/ManageNews/$1";
$route['en/admin/manage-news/(:any)/(:any)'] = "admin/ManageNews/$1/$2";

$route['admin/manage-fee/(:any)'] = "admin/ManageFee/$1";
$route['admin/manage-fee/(:any)/(:any)'] = "admin/ManageFee/$1/$2";
$route['en/admin/manage-fee/(:any)'] = "admin/ManageFee/$1";
$route['en/admin/manage-fee/(:any)/(:any)'] = "admin/ManageFee/$1/$2";

$route['admin/manage-min-fee/(:any)'] = "admin/ManageMinFee/$1";
$route['admin/manage-min-fee/(:any)/(:any)'] = "admin/ManageMinFee/$1/$2";
$route['en/admin/manage-min-fee/(:any)'] = "admin/ManageMinFee/$1";
$route['en/admin/manage-min-fee/(:any)/(:any)'] = "admin/ManageMinFee/$1/$2";

$route['admin/manage-recruit/(:any)'] = "admin/ManageRecruit/$1";
$route['admin/manage-recruit/(:any)/(:any)'] = "admin/ManageRecruit/$1/$2";
$route['en/admin/manage-recruit/(:any)'] = "admin/ManageRecruit/$1";
$route['en/admin/manage-recruit/(:any)/(:any)'] = "admin/ManageRecruit/$1/$2";

// default
$route['(\w{2})/(.*)'] = '$2';
$route['(\w{2})'] = $route['default_controller'];


