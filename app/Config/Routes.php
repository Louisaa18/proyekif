<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->setAutoRoute(true);

$routes->get('/', 'Pages::index');
$routes->get('/menupelanggan', 'Pages::menupelanggan');
$routes->get('/home', 'Pages::index');
$routes->get('/about', 'Pages::about');
$routes->get('/contact', 'Pages::contact');

#pegawai
$routes->get('/login', 'Login::index');
$routes->post('/login/process', 'Login::process');
$routes->get('/logout', 'Login::logout');
$routes->get('/homekaryawan', 'Homekaryawan::index');
$routes->get('/menu', 'Pages_karyawan::menu');
$routes->get('/datapelanggan','Pages_karyawan::pelanggan');
$routes->get('/laporan', 'Pages_karyawan::laporan');
