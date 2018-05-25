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


Route::get('/db', 'StudyDBController@index');
Route::post('/db', 'StudyDBController@post');
Route::get('/db/add', 'StudyDBController@add');
Route::post('/db/add', 'StudyDBController@create');
Route::get('/db/edit', 'StudyDBController@edit');
Route::post('/db/edit', 'StudyDBController@update');
Route::get('db/del', 'StudyDBController@del');
Route::post('db/del', 'StudyDBController@remove');




