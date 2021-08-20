<?php

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('artikel/get', 'ArtikelController@get');
$router->get('kategori/get', 'KategoriController@get');

$router->post('artikel/add','ArtikelController@add');
$router->put('artikel/update/{id}','ArtikelController@update');
$router->delete('artikel/delete/{id}','ArtikelController@delete');

// USER
// GET Doa
$router->get('doa', 'DoaController@get');
// POST Tambah Doa {id}
$router->post('doa','DoaController@add');
// DELETE Hapus Doa {id}
$router->delete('doa/{id}','DoaController@delete');

// Mendoakan
$router->post('berdoa','DoaController@berdoa');

// GET All Renungan
$router->get('renungan','RenunganController@get');

// GET Profil User

// ADMIN
// GET Renungan Per Admin
$router->get('renungan/getId/{id_admin}','RenunganController@getId');
// POST Tambah Renungan {id}
$router->post('renungan','RenunganController@add');
// PUT Edit Renungan
$router->put('renungan/{id}','RenunganController@update');
// DELETE Hapus Renungan
$router->delete('renungan/{id}','RenunganController@delete');

// GET Profil Admin
$router->get('admin/getId/{id_admin}','AdminController@getId');