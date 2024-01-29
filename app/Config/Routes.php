<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('demografi', 'Home::demografi');
$routes->get('detail-pengumuman', 'Home::detail_pengumuman');
$routes->get('pengumuman', 'Home::pengumuman');
$routes->get('perangkat', 'Home::perangkat');
$routes->get('potensi', 'Home::potensi');
$routes->get('visi-misi', 'Home::visi_misi');

$routes->group('admin', ['filter' => 'jwt'], function($routes){
    $routes->get('beranda', 'Admin::demografi');
    $routes->get('pengumuman', 'Admin::pengumuman');
    $routes->get('perangkat', 'Admin::perangkat');
    
    $routes->post('tambahUmur', 'FromHandler::tambahUmur');
    $routes->post('ubahUmur', 'FromHandler::ubahUmur');
    $routes->get('hapusUmur', 'FromHandler::hapusUmur');
    
    $routes->post('tambahPendidikan', 'FromHandler::tambahPendidikan');
    $routes->post('ubahPendidikan', 'FromHandler::ubahPendidikan');
    $routes->get('hapusPendidikan', 'FromHandler::hapusPendidikan');
    
    $routes->post('tambahPekerjaan', 'FromHandler::tambahPekerjaan');
    $routes->post('ubahPekerjaan', 'FromHandler::ubahPekerjaan');
    $routes->get('hapusPekerjaan', 'FromHandler::hapusPekerjaan');
    
    $routes->post('ubahJenisKelamin', 'FromHandler::ubahJenisKelamin');
    
    $routes->get('form-ubah-pengumuman', 'Admin::ubahPengumuman');
    $routes->post('ubahArtikel', 'FromHandler::ubahPengumuman');
    
    $routes->get('form-tambah-pengumuman', 'Admin::tambahPengumuman');
    $routes->post('tambahArtikel', 'FromHandler::tambahPengumuman');

    $routes->get('hapusArtikel', 'FromHandler::hapusPengumuman');


    $routes->get('form-ubah-perangkat', 'Admin::ubahPerangkat');
    $routes->post('ubahPerangkat', 'FromHandler::ubahPerangkat');
    
    $routes->get('form-tambah-perangkat', 'Admin::tambahPerangkat');
    $routes->post('tambahPerangkat', 'FromHandler::tambahPerangkat');

    $routes->get('hapusPerangkat', 'FromHandler::hapusPerangkat');

    $routes->get('logout', 'Auth::logout');
});

$routes->group('admin', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('login', 'Auth::login');
    $routes->post('login', 'Auth::loginValidation');
});
