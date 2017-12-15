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

Route::get('/main', 'HomeController@index')->name('main');

Route::get('/iniciosesion', 'InicioController@index');

Route::post('/iniciosesion', 'InicioController@iniciar');

Route::get('/iniciosesion/olvido', 'InicioController@olvido');

Route::get('/registro', 'RegistroController@index');

Route::post('/registro', 'RegistroController@registro');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/hombre', 'HombreController@index')->name('hombre');
Route::get('/agregar/hombre/{id}', ['uses' => 'HombreController@getAddToCart', 'as' => 'producto.agregarAlCarro']);

Route::get('/sale', 'SaleController@rebaja')->name('sale');
Route::get('/agregar/sale/{id}', ['uses' => 'SaleController@getAddToCart', 'as' => 'producto.agregarAlCarro']);

Route::get('/mujer', 'MujerController@index')->name('mujer');
Route::get('/agregar/producto/{id}', ['uses' => 'MujerController@getAddToCart', 'as' => 'producto.agregarAlCarro']);

Route::get('/historia', 'QuienesController@somos');

Route::get('/servicio', 'ServicioController@consumidor');

Route::get('/contacto', 'ContactoController@index');

Route::get('/carrito/{id?}', 'CarritoController@compras')->name('carrito');

Route::post('/carrito', 'CarritoController@descartar');

Route::get('/busqueda', 'BusquedaController@index')->name('busqueda');


