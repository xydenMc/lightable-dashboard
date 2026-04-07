<?php

use App\Controllers\Dashboard;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setAutoRoute(false);
$routes->setDefaultController('Dashboard');
$routes->setDefaultMethod('index');

$routes->get('/', 'Dashboard::index');
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/affiliate', 'Dashboard::affiliate');
$routes->get('/finance', 'Dashboard::finance');
$routes->get('/helpdesk', 'Dashboard::helpdesk');
$routes->get('/invoice', 'Dashboard::invoice');