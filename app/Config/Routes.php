<?php

namespace Config;

$routes = Services::routes();

if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false);

// Home route
$routes->get('/', 'Home::index');
$routes->get('/dashboard', 'Home::index');

// Analytics routes
$routes->get('/affiliate', 'Affiliate::index');
$routes->get('/finance', 'Finance::index');
$routes->get('/helpdesk', 'Helpdesk::index');
$routes->get('/invoice', 'Invoice::index');

// Other routes
$routes->get('/layouts', 'Home::layouts');
$routes->get('/widget', 'Home::widget');
$routes->get('/statistics', 'Home::statistics');

if (file_exists(APPPATH . 'Config/Routes.php')) {
    require APPPATH . 'Config/Routes.php';
}