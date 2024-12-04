<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->group('id', function($routes) {
    $routes->get('/', 'BerandaController::index');
    $routes->get('tentang', 'TentangController::index');
    $routes->get('produk', 'ProdukController::index');
    $routes->get('produk/(:segment)', 'ProdukController::detail/$1');
    $routes->get('artikel', 'ArtikelController::index'); // Route untuk halaman daftar artikel
    $routes->get('artikel/(:segment)', 'ArtikelController::detail/$1'); // Route untuk detail artikel berdasarkan slug
    $routes->get('aktivitas', 'AktivitasController::index'); // Route untuk halaman daftar artikel
    $routes->get('aktivitas/(:segment)', 'AktivitasController::detail/$1');
    $routes->get('kontak', 'KontakController::index');
});

$routes->group('en', function($routes) {
    $routes->get('/', 'BerandaController::index');
    $routes->get('about', 'TentangController::index');
    $routes->get('product', 'ProdukController::index');
    $routes->get('product/(:segment)', 'ProdukController::detail/$1');
    $routes->get('article', 'ArtikelController::index'); // Route untuk halaman daftar artikel
    $routes->get('article/(:segment)', 'ArtikelController::detail/$1'); // Route untuk detail artikel berdasarkan slug
    $routes->get('activities', 'AktivitasController::index'); // Route untuk halaman daftar artikel
    $routes->get('activities/(:segment)', 'AktivitasController::detail/$1');
    $routes->get('contact', 'KontakController::index');
});

$routes->get('/', function () {
    return redirect()->to('/id/'); // Default redirect ke /en/home
});

// $routes->get('drone', 'Home::drone');
// $routes->get('mouse', 'Home::mouse');
// $routes->get('webcam', 'Home::webcam');
// $routes->get('laptop', 'Home::laptop');
// $routes->get('smartphone', 'Home::smartphone');
// $routes->get('headset', 'Home::headset');

// $routes->get('artikel1', 'Home::artikel1');
// $routes->get('artikel2', 'Home::artikel2');
// $routes->get('artikel3', 'Home::artikel3');
 // Route untuk detail artikel berdasarkan slug$routes->get('aktivitas1', 'Home::aktivitas1');
// $routes->get('aktivitas2', 'Home::aktivitas2');
// $routes->get('aktivitas3', 'Home::aktivitas3');
// $routes->get('aktivitas4', 'Home::aktivitas4');








