<?php

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('artikel', function () use ($router) {
    return $router->app->version();
});

$router->get('/key', 'ExampleController@generateKey');

$router->post('/foo', 'ExampleController@fooExample');

$router->get('/user/{id}', 'ExampleController@getUser');


$router->get('/admin/home',['middleware' => 'age', function(){
    return 'You`re an adult!';
}]);

$router->get('/fail',function(){
    return 'Not yet mature';
});

// // Pakai parameter wajib
// $router->get('/user/{id}',function($id){
//     return 'User id = '. $id;
// });

// // Pakai parameter lebih dari satu
// $router->get('/post/{postId}/comments/{commentId}',function($postId,$commentId){
//     return 'Post ID = '.$postId. ' Comment ID = '.$commentId;
// });

// // Pakai parameter optional
// $router->get('/optional[/{param}]',function($param=null){
//     return $param;
// });

// $router->get('profile',function(){
//     return redirect()->route('route.profile');
// });

// $router->get('profile/carryu',['as'=>'route.profile',function(){
//     return 'Route Carryu';
// }]); 

// // URI Grouping
// // Middleware auth berfungsi agar setiap URI akses harus terautentikasi 
// // Namespace berfungsi untuk membuat folder secara custom / direktori khusus seperti controller dll
// $router->group(['prefix'=>'admin','middleware'=>'auth','namespace'=>''],function()use($router){
//     $router->get('home',function(){
//         return 'Home Admin';
//     });

//     $router->get('profile',function(){
//         return 'Profile Admin';
//     });
// });

// $router->get('/foo', function () {
//     return 'Hello, GET Method!';
// });

// $router->post('/bar', function () {
//     return 'Hello, POST Method!';
// });

// // The router allows you to register routes that respond to any HTTP verb:
// $router->get('/get', function () {
//     return 'GET';
// });
// $router->post('/post', function () {
//     return 'post';
// });

// $router->put('/put', function () {
//     return 'put';
// });

// $router->patch('/patch', function () {
//     return 'patch';
// });

// $router->delete('/delete', function () {
//     return 'delete';
// });
// $router->options('/options', function () {
//     return 'options';
// });
