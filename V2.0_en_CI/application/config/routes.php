<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['download/(:any)'] = "filecontroller/download/$1";
$route['projets/(:any)'] = 'Projet/projet/$1';
$route['sendMsg/attempt'] = 'contact/sendMsg';

