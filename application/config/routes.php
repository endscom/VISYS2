<?php
defined('BASEPATH') OR exit('No direct script access allowed');


#$route['default_controller'] = 'welcome';
$route['default_controller'] = 'login_controller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/******** MIS RUTAS **********/

// LOGIN
$route['login'] = 'login_controller/Acreditar';
$route['salir'] = 'login_controller/Salir';
// FIN LOGIN
$route['Main'] = 'main_controller/main';