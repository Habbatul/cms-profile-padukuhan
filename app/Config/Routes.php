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


$routes->get('admin/beranda', 'Admin::demografi');
$routes->get('admin/pengumuman', 'Admin::pengumuman');
$routes->get('admin/perangkat', 'Admin::perangkat');

$routes->post('admin/tambahUmur', 'FromHandler::tambahUmur');
$routes->post('admin/ubahUmur', 'FromHandler::ubahUmur');
$routes->get('admin/hapusUmur', 'FromHandler::hapusUmur');

$routes->post('admin/tambahPendidikan', 'FromHandler::tambahPendidikan');
$routes->post('admin/ubahPendidikan', 'FromHandler::ubahPendidikan');
$routes->get('admin/hapusPendidikan', 'FromHandler::hapusPendidikan');

$routes->post('admin/tambahPekerjaan', 'FromHandler::tambahPekerjaan');
$routes->post('admin/ubahPekerjaan', 'FromHandler::ubahPekerjaan');
$routes->get('admin/hapusPekerjaan', 'FromHandler::hapusPekerjaan');

$routes->post('admin/ubahJenisKelamin', 'FromHandler::ubahJenisKelamin');

$routes->get('admin/form-ubah-pengumuman', 'admin::ubahPengumuman');
$routes->post('admin/ubahArtikel', 'FromHandler::ubahPengumuman');

$routes->get('admin/form-tambah-pengumuman', 'admin::tambahPengumuman');
$routes->post('admin/tambahArtikel', 'FromHandler::tambahPengumuman');

$routes->get('admin/login', 'Admin::login');