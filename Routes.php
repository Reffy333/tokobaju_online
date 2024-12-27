<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/chart', 'Home::chart');
$routes->get('/checkout', 'Home::checkout');

$routes->post('/submit', 'Home::submit');

$routes->get('images/(:segment)', 'Home::image/$1');

$routes->group('admin', ['filter' => ['group:admin']], function ($routes) {
    $routes->get('', 'AdminController::index');
    $routes->get('dashboard', 'AdminController::index');

    $routes->get('daftar-baju', 'AdminController::daftarBaju');
    $routes->get('daftar-baju/tambah', 'AdminController::daftarBajuTambah');
    $routes->post('daftar-baju/create', 'AdminController::createBaju');
    
    $routes->get('daftar-baju/edit/(:num)', 'AdminController::daftarBajuEdit/$1');
    $routes->get('daftar-baju/edit/(:num)', 'AdminController::daftarBajuEdit/$1');
    $routes->post('daftar-baju/change/(:num)', 'AdminController::changeBaju/$1');

   
    $routes->get('daftar-baju/hapus/(:num)', 'AdminController::hapusBaju/$1');
    $routes->get('admin/daftar-baju/hapus/(:num)', 'AdminController::hapusBaju/$1');
    $routes->post('admin/daftar-baju/hapus/(:num)', 'AdminController::hapusBaju/$1');




    $routes->get('transaksi', 'AdminController::transaksi');
    $routes->get('transaksi/ubah-status', 'AdminController::transaksiUbahStatus');
    $routes->get('transaksi/hapus', 'AdminController::transaksiHapus');

    $routes->get('pelanggan', 'AdminController::pelanggan');
    $routes->get('pelanggan/hapus', 'AdminController::pelangganHapus');
});


service('auth')->routes($routes);