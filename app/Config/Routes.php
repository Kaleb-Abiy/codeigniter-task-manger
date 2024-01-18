<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
// $routes->post('/', 'Home::create');
// $routes->put('/', 'Home::update');
// $routes->delete('/:num', 'Home::delete');


$routes->get('/', 'Home::index');
$routes->post('/', 'Home::create');
$routes->get('/edit-task/(:num)', 'Home::editTask/$1');
$routes->post('/update-task', 'Home::update');
$routes->get('/delete-task/(:num)', 'Home::deleteTask/$1');
$routes->post('/delete', 'Home::delete');
