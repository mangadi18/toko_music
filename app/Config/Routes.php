<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 //user
$routes->get('/', 'User\Beranda::index');
$routes->get('/profil', 'User\Profil::index');
$routes->get('/kontak', 'User\Kontak::index');
$routes->get('/daftar-produk', 'User\Produk::index');
$routes->get('/pemesan', 'User\Pemesan::index');


//user-alatmusic
$routes->get('/gitar', 'User\Music\Gitar::index');
$routes->get('/dram', 'User\Music\Dram::index');
$routes->get('/bas', 'User\Music\Bas::index');
$routes->get('/aks', 'User\Music\Aks::index');

//admin
$routes->get('/beranda', 'Admin\Beranda::index');
//
$routes->get('/login', 'Admin\Login::index');
$routes->post('/login/process', 'Admin\Login::process');
$routes->get('/logout', 'Admin\Logout::process');


//admin-gitar
$routes->get('/admin-gitar', 'Admin\Music\Gitar::index');
$routes->get('/gitar-tambah', 'Admin\Music\Gitar::gitar');
$routes->post('/gitar-insert', 'Admin\Music\Gitar::insert');
$routes->get('/gitar-edit/(:any)', 'Admin\Music\Gitar::edit/$1');
$routes->post('/gitar-update/(:any)', 'Admin\Music\Gitar::update/$1');
$routes->get('/gitar-hapus/(:any)', 'Admin\Music\Gitar::delete/$1');

//admin-drumm
$routes->get('/admin-dram', 'Admin\Music\Dram::index');
$routes->get('/dram-tambah','Admin\Music\Dram::dram');
$routes->post('/dram-insert', 'Admin\Music\Dram::insert');
$routes->get('/dram-edit/(:any)', 'Admin\Music\Dram::edit/$1');
$routes->post('/dram-update/(:any)', 'Admin\Music\Dram::update/$1');
$routes->get('/dram-hapus/(:any)', 'Admin\Music\Dram::delete/$1');

//admin-bas
$routes->get('/admin-bas', 'Admin\Music\Bas::index');
$routes->get('/bas-tambah','Admin\Music\Bas::bas');
$routes->post('/bas-insert', 'Admin\Music\Bas::insert');
$routes->get('/bas-edit/(:any)', 'Admin\Music\Bas::edit/$1');
$routes->post('/bas-update/(:any)', 'Admin\Music\Bas::update/$1');
$routes->get('/bas-hapus/(:any)', 'Admin\Music\Bas::delete/$1');

//admin-aks
$routes->get('/admin-aks', 'Admin\Music\Aks::index');
$routes->get('/aks-tambah','Admin\Music\Aks::aks');
$routes->post('/aks-insert', 'Admin\Music\Aks::insert');
$routes->get('/aks-edit/(:any)', 'Admin\Music\Aks::edit/$1');
$routes->post('/aks-update/(:any)', 'Admin\Music\Aks::update/$1');
$routes->get('/aks-hapus/(:any)', 'Admin\Music\Aks::delete/$1');

