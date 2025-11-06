<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->group('admin', function ($routes) {
    // Dashboard
    $routes->get('dashboard', function () {
        return view('admin/dashboard', ['title' => 'Dashboard - SMK Al-Munawwir']);
    });

    // Master Data
    $routes->get('guru', function () {
        return view('admin/guru', ['title' => 'Data Guru - SMK Al-Munawwir']);
    });

    $routes->get('murid', function () {
        return view('admin/murid', ['title' => 'Data Siswa - SMK Al-Munawwir']);
    });

    // Kelas & Mapel
    $routes->get('kelas-mapel', function () {
        return view('admin/kelas-mapel', ['title' => 'Kelas & Mapel - SMK Al-Munawwir']);
    });

    // Jadwal Mengajar
    $routes->get('jadwal-mengajar', function () {
        return view('admin/jadwal-mengajar', ['title' => 'Jadwal Mengajar - SMK Al-Munawwir']);
    });

    // Jadwal Guru Piket
    $routes->get('jadwal-piket', function () {
        return view('admin/jadwal-piket', ['title' => 'Jadwal Guru Piket - SMK Al-Munawwir']);
    });

    // Pengaturan
    $routes->get('geolocation', function () {
        return view('admin/geolocation', ['title' => 'Radius Geolocation - SMK Al-Munawwir']);
    });

    $routes->get('whatsapp', function () {
        return view('admin/whatsapp', ['title' => 'Notifikasi WhatsApp - SMK Al-Munawwir']);
    });

    // Laporan & Monitoring
    $routes->get('laporan', function () {
        return view('admin/laporan', ['title' => 'Laporan & Monitoring - SMK Al-Munawwir']);
    });
});