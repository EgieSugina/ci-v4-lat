<?php

// use CodeIgniter\Router\RouteCollection;
namespace Config;

$router = Services::router();
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);
$routes->get('/', 'Home::index');
$routes->get('/latihanci4_egie_sugina', 'Latihan::index');
$routes->get('/latihan_codeigniter', 'Latihan::codeigniter');
$routes->get('/latihan', 'Latihan::menampilkan_view');
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}