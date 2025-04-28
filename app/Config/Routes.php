<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'MataKuliah::home');
$routes->get('/index_matakuliah/(:num)', 'MataKuliah::matkul/$1'); //halaman detail
$routes->setAutoRoute(false);
