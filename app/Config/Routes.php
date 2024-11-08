<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'BerandaController::index');
$routes->get('tentang', 'TentangController::index');
$routes->get('produk', 'ProdukController::index');
$routes->get('produk/(:segment)', 'ProdukController::detail/$1');

// $routes->get('drone', 'Home::drone');
// $routes->get('mouse', 'Home::mouse');
// $routes->get('webcam', 'Home::webcam');
// $routes->get('laptop', 'Home::laptop');
// $routes->get('smartphone', 'Home::smartphone');
// $routes->get('headset', 'Home::headset');
$routes->get('artikel', 'ArtikelController::index'); // Route untuk halaman daftar artikel
$routes->get('artikel/(:segment)', 'ArtikelController::detail/$1'); // Route untuk detail artikel berdasarkan slug
// $routes->get('artikel1', 'Home::artikel1');
// $routes->get('artikel2', 'Home::artikel2');
// $routes->get('artikel3', 'Home::artikel3');
$routes->get('aktivitas', 'AktivitasController::index');
$routes->get('aktivitas1', 'Home::aktivitas1');
$routes->get('aktivitas2', 'Home::aktivitas2');
$routes->get('aktivitas3', 'Home::aktivitas3');
$routes->get('aktivitas4', 'Home::aktivitas4');
$routes->get('kontak', 'KontakController::index');








