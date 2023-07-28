<?php

namespace Config;

use CodeIgniter\Router\RouteCollection;
use CodeIgniter\Router\Route;
use CodeIgniter\Config\Services;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setAutoRoute(true);
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Default_Controller');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Default_Controller::index');
$routes->get('page/detailv', 'Detailv::getData');
$routes->get('page/(:num)', 'Detailv::getRootData/$1');
$routes->get('page/shahih_bukhari_view', 'Shahih_Bukhari::view'); // Add this line
$routes->get('page/shahih_muslim_view', 'Shahih_Muslim::view'); // Add this line
$routes->get('page/sunan_tirmidzi_view', 'Sunan_Tirmidzi::view'); // Add this line
$routes->get('page/sunan_nasai_view', 'Sunan_Nasai::view'); // Add this line
$routes->get('page/sunan_abu_dawud_view', 'Sunan_Abu_dawud::view'); // Add this line
$routes->get('page/sunan_ibnu_majah_view', 'Sunan_Ibnu_Majah::view'); // Add this line
$routes->get('page/all_kitab_view', 'All_Kitab::view'); // Add this line

$routes->get('page/shahih_bukhari_view/highlight/(:any)', 'Shahih_Bukhari::view/$1'); // Add this line

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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
