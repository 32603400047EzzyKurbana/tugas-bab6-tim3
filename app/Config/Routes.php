<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');

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