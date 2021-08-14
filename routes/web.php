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
// GET Cek Doa



// ADMIN
// GET Renungan
// POST Tambah Renungan {id}
// PUT Edit Renungan
// DELETE Hapus Renungan