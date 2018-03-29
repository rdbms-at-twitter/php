<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/* This is the first sample page */
Route::get('/hello', function () {
    return '<html><body><h1>Hello World</h1><p>Laravelサンプルページ</p></body></html>';
});

/* This is the first sample page by using View */
Route::get('/hello_world', function () {
     return view('hello_world',['message' => 'Hello Laravel!! VIEWのサンプルページ']);
});

/* This is the first sample page by using Controller */
Route::get('/hello_controller', 'hello_laravel@getIndex');

/* This is the sample of Request */
Route::get('/hello_request', 'hello_request@getIndex');
Route::post('/hello_request', 'hello_request@postIndex');

/* This is the sample of Request URI */
Route::get('/hello_request_uri', 'hello_request_uri@getIndex');
Route::post('/hello_request_uri', 'hello_request_uri@postIndex');

/* This is the sample of server variables */
Route::get('/hello_variables', 'hello_variables@getIndex');

/* This is the sample of MySQL Connection */
Route::get('/hello_mysql', 'hello_mysql@getIndex');

