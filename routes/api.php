<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// http://ptua.desenvolvimento/api/users
Route::get('/users', 'HomeController@getUsers');

Route::post('/register', 'HomeController@registerUser');

// http://ptua.desenvolvimento/api/noticias

Route::get('/noticias', 'NoticiaController@ApiGetNoticias');


// para o login da app react native

// http://ptua.desenvolvimento/api/loginApp

Route::post ('/loginApp', 'HomeController@authenticateNative');

// dar like numa noticia
// http://ptua.desenvolvimento/api/likenoticia
Route::post('/likenoticia', 'LikeNoticiaController@ApiStore');

Route::get('/likespornoticia/{id_noticia}', 'NoticiaController@ApiGetLikesNoticia');

Route::get('/likes','NoticiaController@GetLikes');

// comentar noticias

Route::post('/comentarioNoticia','ComentarioNoticiaController@storeApi');

Route::get('/comentarioNoticia/{id_noticia}','ComentarioNoticiaController@getComentarios');

// criar noticias

Route::post('/criarnoticia','NoticiaController@storeApi');


// editar perfil

Route::post('/useredit/{id}', 'HomeController@updateUser');

// chat

Route::get('/chat','HomeController@displayApiChat');


Route::post('/chat','HomeController@comentaApiChat');