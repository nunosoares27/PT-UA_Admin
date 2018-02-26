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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/emailconfirm/{email}', 'HomeController@confirmaEmailUtilizador');

Route::put('/confirmAdmin/{id}', 'HomeController@confirmaAdmin');

Route::get('/criarduvida','DuvidaController@create');

Route::post('/criarduvida','DuvidaController@store');

Route::get('/feed-duvidas','DuvidaController@index');

Route::get('/duvida-edit/{id}','DuvidaController@edit');

Route::get('/duvidas-user','DuvidaController@showDuvidasUser');

Route::put('/duvida-edit/{id}', 'DuvidaController@update');