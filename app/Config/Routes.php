<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'MataKuliah::home');
$routes->get('pemweb', 'MataKuliah::pemweb');
$routes->get('metopen', 'MataKuliah::metopen');
$routes->get('sim', 'MataKuliah::sim');
$routes->get('rpl', 'MataKuliah::rpl');

$routes->setAutoRoute(false);
