<?php

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->post('login', 'AuthController@login');
$router->post('register', 'AuthController@register');

$router->get('artikel/get', 'ArtikelController@get');
$router->get('kategori/get', 'KategoriController@get');

$router->post('artikel/add','ArtikelController@add');
$router->put('artikel/update/{id}','ArtikelController@update');
$router->delete('artikel/delete/{id}','ArtikelController@delete');

// USER
$router->get('doa', 'DoaController@get');
$router->post('doa','DoaController@add');
$router->delete('doa/{id}','DoaController@delete');

// Mendoakan
$router->post('berdoa','DoaController@berdoa');

// GET All Renungan
$router->get('renungan','RenunganController@get');

// GET Profil User

// ADMIN
// GET Renungan Per Admin
$router->get('renungan/getId/{id_admin}','RenunganController@getId');
$router->post('renungan','RenunganController@add');
$router->put('renungan/{id}','RenunganController@update');
$router->delete('renungan/{id}','RenunganController@delete');

// GET Profil Admin
$router->get('admin/getId/{id_admin}','AdminController@getId');

// GET Profil User
$router->get('user/getId/{id_user}','UserController@getId');