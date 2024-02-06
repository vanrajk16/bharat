<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/registrition','Register::index');
$routes->post('/getCitiesByState','Register::getCitiesByState');
$routes->post('/register','Register::add_data');



