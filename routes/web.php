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

//Route::resource('/books', 'BookController');
Route::resource('/books', 'BookController');
Route::get('/', 'InicioController@redirecionar')->name('inicio');


Auth::routes();

Route::get('/login', 'Auth\LoginController@login')->name('login');
Route::post('/login/do', 'Auth\LoginController@loginDo')->name('login.do');
Route::post('/login/logout', 'Auth\LoginController@loginLogout')->name('login.logout');

Route::get('/home', 'HomeController@index')->name('home');




