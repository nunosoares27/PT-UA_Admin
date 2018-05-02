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

Route::delete('/duvida-edit/{id}', 'DuvidaController@destroy');

// email da welcome page antes dos utilizadores se registarem

Route::post('/welcome-email', 'HomeController@enviaEmailWelcomePage');


// noticias

Route::get('/criarnoticia','NoticiaController@create');

Route::post('/criarnoticia','NoticiaController@store');

Route::get('/feed-noticias','NoticiaController@index');

// testar broacastevents

// use App\Events\TestUpdate;

// Route::get('/test/{nome}', function (){
//     TestUpdate::dispatch($nome);
//     return view('welcome');
// });


Route::get('/test/{nome}-{cargo}', 'HomeController@testBroadcast');


Route::post('/chat','HomeController@comentaChat');


// new design

Route::get('/home2','HomeController@index2');

Route::get('/eventos', 'EventoController@getEventosLaravel');

Route::get('/chat','HomeController@displayChat');

Route:: get('/perfil','HomeController@displayProfile');