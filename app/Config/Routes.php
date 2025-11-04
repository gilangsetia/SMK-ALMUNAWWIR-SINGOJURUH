<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/admin/dashboard', function() {
    return view('admin/dashboard', ['title' => 'Dashboard - SMK Al-Munawwir']);
});

