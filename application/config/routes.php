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
$route['EliminarVineta'] = 'main_controller/EliminarVineta';
$route['Clientes'] = 'main_controller/Clientes';
$route['BajaClientes'] = 'main_controller/BajaClientes';
$route['PuntosClientes'] = 'main_controller/PuntosClientes';
$route['DetalleFact'] = 'main_controller/DetalleFact';
$route['Frp'] = 'main_controller/CanjeFrp';
$route['FRE'] = 'main_controller/CanjeFre';


$route['Usuarios'] = 'main_controller/Usuarios';
$route['Reportes'] = 'main_controller/Reportes';
