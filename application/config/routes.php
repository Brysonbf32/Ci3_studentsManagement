<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome/index';
$route['student'] = 'StudentController/index';
$route['students/add'] = 'StudentController/addstudents';
$route['student/store'] = 'StudentController/store';
$route['student/edit/(:any)'] = 'StudentController/edit/$1';
$route['student/update/(:any)'] = 'StudentController/update/$1';
$route['student/delete/(:any)'] = 'StudentController/delete/$1';

$route['404_override'] = ''; 
$route['translate_uri_dashes'] = FALSE;