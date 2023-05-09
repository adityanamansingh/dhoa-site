<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';


$route['about']='home/about';
$route['contact']='home/contact';
$route['collection']='home/collection';
$route['products'] = 'frontend/product/index';
$route['products/fetch_data/(:any)'] = "frontend/product/fetch_data/$1";
$route['products/fetch_datacat/(:any)'] = "frontend/product/fetch_datacat/$1"; /* AJAX PRODUCTS PAGE*/
$route['products/fetch_datasubcat/(:any)'] = "frontend/product/fetch_datasubcat/$1"; /* AJAX PRODUCTS PAGE*/
$route['products/fetch_datacollection/(:any)'] = "frontend/product/fetch_datacollection/$1";
$route['products/product-details/(:any)'] = "frontend/product/product_details/$1";
$route['getcategory/(:any)'] ='frontend/product/getcategory/$1'; /* Category Filter   */
$route['getsubcategory/(:any)'] ='frontend/product/getsubcategory/$1'; /* Subcategory Filter   */
$route['getcollection/(:any)'] ='frontend/product/getcollection/$1'; /* Collection Filter */


$route['blog'] = 'home/blog';

$route['blog-detail/(:any)'] = 'home/blog_details/$1';

$route['admin'] = 'admin/login';
$route['admin/dashboard'] = 'admin/dashboard';
$route['admin/mail'] ='admin/mail';
$route['admin/contact'] = 'contact';
$route['admin/enquiry']='admin/enquiry';
$route['admin/logout'] = 'admin/login/logout';
$route['admin/brand'] = 'admin/brand';
$route['admin/item']  = "admin/item";
$route['admin/faq']  = "admin/faq";
$route['admin/application']  = "admin/application";
$route['admin/category']  = "admin/category";
$route['admin/kva']  = "admin/kva";
$route['admin/supplier']  = "admin/supplier";
$route['admin/vendor']  = "admin/vendor";
$route['admin/product']  = "admin/product";
$route['admin/slider']  = "admin/slider";
$route['admin/ads']  = "admin/ads";
$route['admin/ads1']  = "admin/ads1";
$route['admin/ads2']  = "admin/ads2";
$route['admin/ads3']  = "admin/ads3";
$route['404_override'] = '';

$route['translate_uri_dashes'] = FALSE;
