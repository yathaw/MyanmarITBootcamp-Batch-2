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

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Frontend
$route['default_controller'] = 'Welcome';
$route['test'] = 'Welcome';


// $route[':num'] ='Home_ctrl';
// $route['(:any)'] = 'Home_ctrl';
$route['home/book/detail/:num'] ='Home_ctrl/detail';
$route['home/book/buy/:num'] ='Home_ctrl/buy';
$route['home/author/:num'] ='Home_ctrl/author';
$route['home/category/:num'] ='Home_ctrl/category';

// Login
$route['login'] = 'Auth_ctrl';
$route['authentication'] ='Auth_ctrl/login';
$route['logout'] ='Auth_ctrl/logout';

// Dashboard
$route['dashboard'] ='Dashboard_ctrl';

// Author
$route['author'] ='Author_ctrl';
$route['author/create'] ='Author_ctrl/create';
$route['author/store'] = 'Author_ctrl/store';
$route['author/detail/:num'] = 'Author_ctrl/edit';
$route['author/edit/:num'] = 'Author_ctrl/edit';
$route['author/update'] = 'Author_ctrl/update';
$route['author/delete/:num'] = 'Author_ctrl/delete';
// -----------------------------------------------------------------------------

// Category
$route['category'] ='Category_ctrl';
$route['category/create'] ='Category_ctrl/create';
$route['category/store'] = 'Category_ctrl/store';
$route['category/edit/:num'] = 'Category_ctrl/edit';
$route['category/update'] ='Category_ctrl/update';
$route['category/delete/:num'] = 'Category_ctrl/delete';
// -----------------------------------------------------------------------------

// Book
$route['book'] ='Book_ctrl';
$route['book/create'] ='Book_ctrl/create';
$route['book/store'] = 'Book_ctrl/store';
$route['book/detail/:num'] ='Book_ctrl/edit';
$route['book/edit/:num'] = 'Book_ctrl/edit';
$route['book/update'] ='Book_ctrl/update';
$route['book/delete/:num'] = 'Book_ctrl/delete';
// -----------------------------------------------------------------------------
