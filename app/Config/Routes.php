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
