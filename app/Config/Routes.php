<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

// Route utama BAB 6
$routes->get('/', 'Bab6::index');
$routes->get('bab6', 'Bab6::index');
$routes->get('bab6/tambah', 'Bab6::tambah');
$routes->post('bab6/simpan', 'Bab6::simpan');
$routes->get('bab6/edit/(:num)', 'Bab6::edit/$1');
$routes->post('bab6/update/(:num)', 'Bab6::update/$1');
$routes->get('bab6/hapus/(:num)', 'Bab6::hapus/$1');

// Route bab sebelumnya
$routes->get('form', 'Mahasiswa::form');
$routes->post('submit', 'Mahasiswa::submit');
$routes->get('profil', 'Page::profil');
$routes->get('skill', 'Page::skill');
$routes->get('halodunia', 'HelloWorld::halodunia');
$routes->get('latihanview', 'HelloWorld1::index');
$routes->get('ezzy', 'Ezzy::index');

// Route Bab 5 CRUD Mahasiswa
$routes->get('crud', 'Crud::index');
$routes->get('tambah', 'Crud::tambah');
$routes->post('simpan', 'Crud::simpan');
$routes->get('edit/(:segment)', 'Crud::edit/$1');
$routes->post('update', 'Crud::update');
$routes->get('hapus/(:segment)', 'Crud::hapus/$1');
