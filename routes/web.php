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
//Ruta para mostrar una vista estatica
Route::get('/hola-mundo',function(){
	return 'Hola mundo: Bienvenido a laravel';
});

Route::get('/contacto',function(){
	return view('contacto');
});