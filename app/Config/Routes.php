<?php

use App\Controllers\Dashboard;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setDefaultController('Dashboard');
$routes->setDefaultMethod('index');

$routes->get('/', 'Dashboard::index');
$routes->get('/dashboard', 'Dashboard::index');