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
#9
$route['default_controller'] = 'hogwarts';
#10
$route['404_override'] = 'hogwarts/random';

$route['translate_uri_dashes'] = FALSE;

// #3
$route['sleep'] = 'first/zzz';

// #4
$route['lock/(:any)/(:any)'] = 'hogwarts/shucks';

// #5
$route['show/(:num)'] = 'first/gimme/$1';

// #6
$route['dunno'] = function() {
   $source = '../data/albert.jpg'; // an image you provide, outside of "public"!
   // set the mime type for that image (jpeg, png, etc)
   header("Content-type: image/jpeg"); 
   header('Content-Disposition: inline');
   readfile($source); // dish it
   die(); // and we don't have to go any further
};

// #7

$route['^[a-zA-Z]{4}/bingo'] = 'bingo';

//#8
$route['comp+(\d+)/(:any)'] = 'wise/bingo';
