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
Route::get('/insert','MongoController@insert');
Route::get('/show','MongoController@show');
Route::get('/update','MongoController@update');
Route::get('/delete','MongoController@delete');

Route::get('/chat','SwooleController@index');//聊天室