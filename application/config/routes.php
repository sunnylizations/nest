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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['404_override'] = 'welcome/not_found_404';
$route['translate_uri_dashes'] = FALSE;


$route['about-us']="welcome/about";
$route['contact-us']="welcome/contact";
$route['cart']="welcome/cart";
$route['checkout']="welcome/checkout";
//////////all product page
$route['allproducts']="welcome/allproduct";
$route['allproducts/(:any)']="welcome/allproduct/$1";
////////product page with side bar
$route['products']="welcome/product";
$route['products/(:any)']="welcome/product/$1";
////////product-list page with side bar
$route['product-list']="welcome/product_list";
$route['product-list/(:any)']="welcome/product_list/$1";
////////product-details full page
$route['product-detail/(:any)']= "welcome/product_detail/$1";
//////////////////category 
$route['category/(:any)']= "welcome/category/$1";
$route['category/(:any)/(:any)']= "welcome/category/$1/$1";



////////////////for wishlist
$route['wishlist']="welcome/wishlist";
$route['wishdelete/(:num)']= "welcome/wishdelete/$1";


////////////////for compare
$route['compare/(:any)/(:any)']= "welcome/compare/$1/$2";

////////////////for privacy-policy
$route['privacy-policy']="welcome/privacy";

////////////////for privacy-policy
$route['terms-of-service']="welcome/terms";

////////////////for privacy-policy
$route['purchase-guide']="welcome/purchase";





////////////////for register
$route['register']="welcome/register";

////////////////for account
$route['account']="welcome/account";

////////////////for logout
$route['logout']="welcome/logout";

////////////////for login
$route['login']="welcome/login";

////////////////for invoice
$route['invoice/(:any)']="welcome/invoice/$1";
