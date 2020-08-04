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

//Resource (get, delete, post, put)
Route::resource('/perguntas','PerguntaController');
Route::resource('/respostas','RespostasController');
Route::resource('/usuarios','usuarioController');
Route::get('/perguntas/validar/{id}/{qtd}/{page}/{usuario}','PerguntaController@validar');
Route::get('/perguntas/pontuacao/{qtd}/{usuario}','PerguntaController@pontuacao');
Route::get('/edicao/{id}','RespostasController@edicaoRespostas');
Route::get('/listar/{usuario}','PerguntaController@responder');
Route::get('/logar','usuarioController@viewLogar');
Route::get('/validarLogin','usuarioController@logar');
Route::get('/Ranking','usuarioController@ranking');

Route::get('/', function () {
    return view('welcome');

});

