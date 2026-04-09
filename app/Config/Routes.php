<?php

namespace Config;

$routes = Services::routes();

if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Dashboard');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false);

// Routes
$routes->get('/', 'Dashboard::index');
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/affiliate', 'Dashboard::affiliate');
$routes->get('/finance', 'Dashboard::finance');
$routes->get('/helpdesk', 'Dashboard::helpdesk');
$routes->get('/invoice', 'Dashboard::invoice');
$routes->get('/layouts', 'Dashboard::layouts');
$routes->get('/widget', 'Dashboard::widget');
$routes->get('/statistics', 'Dashboard::statistics');

if (file_exists(APPPATH . 'Config/Routes.php')) {
    include_once APPPATH . 'Config/Routes.php';
}