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

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('menu', function () {
    return view('menu');
});

Route::get('paquetes', function () {
    return view('paquetes');
});

Route::get('contactos', function () {
    return view('contactos');
});


Route::get('contactanos/index2', 'ContactoController@index2');

Route::get('contactanos/index2/{dato}', 'ContactoController@indexB');

Route::resource('contactanos','ContactoController');

Route::get('historia', function () {
    return view('historia');
});

Route::get('sucursales', function () {
    return view('sucursales');
});

Route::get('Antojitos/index2', 'AntojitoController@index2');

Route::get('Antojitos/index2/{dato}', 'AntojitoController@indexB');

Route::resource('Antojitos','AntojitoController');

Route::get('MasComidas/index2', 'MasComidaController@index2');

Route::get('MasComidas/index2/{dato}', 'MasComidaController@indexB');

Route::resource('MasComidas','MasComidaController');

Route::get('Bebidas/index2', 'BebidaController@index2');

Route::get('Bebidas/index2/{dato}', 'BebidaController@indexB');

Route::resource('Bebidas','BebidaController');

Route::get('user/index2', 'UserController@index2');

Route::get('user/{user}/editarContraseña', 'UserController@editarContraseña');

Route::PATCH('user/{user2}', 'UserController@update2');

Route::resource('user','UserController');

