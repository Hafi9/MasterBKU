<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
// app/Config/Routes.php

// Role routes
$routes->get('/role', 'RoleController::index');
$routes->get('/role/create', 'RoleController::create');
$routes->post('/role/create', 'RoleController::create');
$routes->get('/role/edit/(:num)', 'RoleController::edit/$1');
$routes->post('/role/edit/(:num)', 'RoleController::edit/$1');
$routes->post('/role/delete/(:num)', 'RoleController::delete/$1');

// User routes
$routes->get('/user', 'UserController::index');
$routes->get('/user/create', 'UserController::create');
$routes->post('/user/create', 'UserController::create');
$routes->get('/user/edit/(:num)', 'UserController::edit/$1');
$routes->post('/user/edit/(:num)', 'UserController::edit/$1');
$routes->post('/user/delete/(:num)', 'UserController::delete/$1');

//BBM Routes
$routes->get('/bbm', 'BbmController::index'); // Menampilkan semua data bbm
$routes->get('/bbm/create', 'BbmController::create'); // Form untuk menambah data bbm
$routes->post('/bbm/create', 'BbmController::create'); // Menyimpan data bbm baru
$routes->get('/bbm/edit/(:num)', 'BbmController::edit/$1'); // Form untuk mengedit data bbm
$routes->post('/bbm/update/(:num)', 'BbmController::edit/$1'); // Menyimpan perubahan pada data bbm
$routes->get('/bbm/delete/(:num)', 'BbmController::delete/$1'); // Konfirmasi penghapusan data bbm

//Nama Pelaksana routes
$routes->get('/nama_pelaksana', 'NamaPelaksanaController::index');
$routes->get('/nama_pelaksana/create', 'NamaPelaksanaController::create');
$routes->post('/nama_pelaksana/create', 'NamaPelaksanaController::create');
$routes->get('/nama_pelaksana/edit/(:num)', 'NamaPelaksanaController::edit/$1');
$routes->post('/nama_pelaksana/edit/(:num)', 'NamaPelaksanaController::edit/$1');
$routes->post('/nama_pelaksana/delete/(:num)', 'NamaPelaksanaController::delete/$1');

//Laporan Perdin
$routes->get('/laporan', 'LaporanPerjalananDinasController::index');
$routes->get('/laporan/create', 'LaporanPerjalananDinasController::create');
$routes->post('/laporan/create', 'LaporanPerjalananDinasController::create');
$routes->get('/laporan/edit/(:num)', 'LaporanPerjalananDinasController::edit/$1');
$routes->post('/laporan/edit/(:num)', 'LaporanPerjalananDinasController::edit/$1');
$routes->get('/laporan/delete/(:num)', 'LaporanPerjalananDinasController::delete/$1');









