<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('mensaje', 'ProductosController::mensaje');
$routes->get('products', 'ProductosController::getProducts');
