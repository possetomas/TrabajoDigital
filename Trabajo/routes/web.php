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

Route::get('/', 'HomeController@index');

Route::get('/main', 'HomeController@index');

Route::get('/iniciosesion', 'InicioController@index');

Route::post('/iniciosesion', 'InicioController@iniciar');

Route::get('/iniciosesion/olvido', 'InicioController@olvido');

Route::get('/registro', 'RegistroController@index');

Route::post('/registro', 'RegistroController@registro');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

