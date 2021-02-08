<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aqui é onde você pode registrar as rotas da web para seu aplicativo. 
| Essas rotas são carregadas pelo RouteServiceProvider dentro de um grupo que
| contém o grupo de middleware "web". Agora crie algo ótimo!

*/


Route::resource('/candidato', 'CandidatoController');
Route::get('/candidato', 'CandidatoController@index')->name('candidato');

Route::any('/candidato/search', 'CandidatoController@search')->name('candidato.search');

Route::get('/', 'InicioController@redirecionar')->name('inicio');

Auth::routes();

Route::get('/login', 'Auth\LoginController@login')->name('login');
Route::post('/login/do', 'Auth\LoginController@loginDo')->name('login.do');
Route::post('/login/logout', 'Auth\LoginController@loginLogout')->name('login.logout');

Route::get('/home', 'HomeController@index')->name('home');




