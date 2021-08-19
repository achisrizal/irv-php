<?php

namespace Config;

use CodeIgniter\Commands\Utilities\Routes;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Superadmin::index', ['filter' => 'role:superadmin']);
$routes->get('/index', 'Superadmin::index', ['filter' => 'role:superadmin']);
$routes->get('profile/password', 'Profile::password');
$routes->post('map', 'Map::index');
$routes->post('measurement/(:segment)', 'Measurement::show/$1', ['filter' => 'role:superadmin,admin']);

$routes->resource('profile');
$routes->resource('stations', ['except' => ['index', 'show'], 'filter' => 'role:superadmin']);
$routes->resource('stations', ['only' => ['index', 'show']]);
$routes->resource('positions', ['filter' => 'role:superadmin']);
$routes->resource('measurement', ['filter' => 'role:superadmin,admin']);
$routes->resource('map');
$routes->resource('data', ['filter' => 'role:superadmin,admin']);
$routes->resource('user', ['controller' => 'Users', 'filter' => 'role:superadmin,admin']);

// $routes->post('/map/new', 'Map::create');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
