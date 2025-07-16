<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
/*
$routes->get('/productos', 'Productos::index');
*/

$routes->get('/stock', 'StockController::index');


//Alta
$routes->get('productos/crear', 'Productos::crear');
$routes->post('productos/guardar', 'Productos::guardar');

//Detalle

$routes->get('stock/verDetalle/(:num)', 'StockController::verDetalle/$1');

//Edición
$routes->get('stock/actualizarStock/(:num)', 'StockController::actualizarStockForm/$1');
$routes->post('stock/actualizarStock/(:num)', 'StockController::actualizarStock/$1');


//Borrado
$routes->post('productos/(:num)/borrar', 'Productos::borrar/$1');
