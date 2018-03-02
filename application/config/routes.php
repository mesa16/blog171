<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//$route['blog']            = 'blog';            // daftar blog    // baca blog dengan blog_id $1
$route['blog/post']           = 'blog/post';       // halaman penulisan blog
$route['blog/submit']         = 'blog/submit';  // proses penyimpanan blog
$route['user/masuk']          = 'user/masuk';
$route['welcome']             = 'welcome/home'; //halaman paling depan
$route['home']                = 'welcome/home'; //halaman sesudah login


$route['user/signin']         = 'user/signin';     // proses login user
$route['user/signout']        = 'user/signout';    // proses login user
$route['user/reg']            = 'user/register';   // halaman form registrasi user
$route['user/reg_submit']     = 'user/regsubmit';  // proses registrasi user
$route['user/(:any)']         = 'user/about/$1';  //untuk profile

$route['blog/(:any)']            = 'blog/index/$1';
$route['blog/edit/(:any)']       = 'blog/edit/$1'; //edit data
$route['blog/subedit/(:any)']    = 'blog/subedit/$1'; //edit data
$route['blog/delete/(:any)']     = 'blog/delete/$1' ; //delete hanya user yang login


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
