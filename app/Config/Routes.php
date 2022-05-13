<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Dashboard');
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
$routes->get('/', 'Dashboard::index');

$routes->get('create', 'Students::create');
$routes->get('update', 'Students::update');
$routes->post('save', 'Students::save');
$routes->get('edit/(:num)', 'Students::edit/$1');
$routes->post('update/(:num)', 'Students::update/$1');
$routes->get('delete/(:num)', 'Students::delete/$1');

$routes->get('create', 'Subjects::create');
$routes->get('update', 'Subjects::update');
$routes->post('save', 'Subjects::save');
$routes->get('edit/(:num)', 'Subjects::edit/$1');
$routes->post('update', 'Subjects::update');
$routes->get('delete/(:num)', 'Subjects::delete/$1');

$routes->get('create', 'Courses::create');
$routes->get('update', 'Courses::update');
$routes->post('save', 'Courses::save');
$routes->get('edit/(:num)', 'Courses::edit/$1');
$routes->post('update', 'Courses::update');
$routes->get('delete/(:num)', 'Courses::delete/$1');



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
