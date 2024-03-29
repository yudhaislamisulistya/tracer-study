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

$routes->get('/', 'OtentikasiController::index');
$routes->post('/login/store', 'OtentikasiController::login_store');
$routes->post('/logout', 'OtentikasiController::logout', ['filter' => 'auth']);

$routes->get('/coba', 'OtentikasiController::coba');
$routes->add('/get_alumni/(:any)/(:any)', 'OtentikasiController::get_alumni/$1/$2');
$routes->add('/get_activate_now/(:any)', 'OtentikasiController::get_activate_now/$1');
$routes->add('/get_password/(:any)', 'OtentikasiController::get_password/$1');
$routes->add('/get_regencies/(:any)', 'MainController::get_regencies/$1');
$routes->post('/post_activation', 'OtentikasiController::post_activation');

// Setelah Halaman Dashboard

$routes->get('/dashboard', 'MainController::index', ['filter' => 'auth']);
$routes->get('/biodata', 'MainController::biodata', ['filter' => 'auth']);

// Manajemen Data Biodata
$routes->post('/biodata/store', 'BiodataController::post_biodata', ['filter' => 'auth']);

// Manajemen Data Kuesioner
$routes->get('/kuesioner', 'KuesionerController::index', ['filter' => 'auth']);
$routes->post('/kuesioner/store', 'KuesionerController::post_kuesioner', ['filter' => 'auth']);

// Manajemen Data Berita
$routes->get('/berita', 'BeritaController::index', ['filter' => 'auth']);

// Manajamen Data Portal Alumni
$routes->get('/portal-alumni', 'PortalAlumniController::index', ['filter' => 'auth']);

// Manajamen Data Legalisir
$routes->get('/legalisir', 'LegalisirController::index', ['filter' => 'auth']);

// Manajemen Data Lowongan Kerja
$routes->get('/lowongan-kerja', 'LowonganKerjaController::index', ['filter' => 'auth']);




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
