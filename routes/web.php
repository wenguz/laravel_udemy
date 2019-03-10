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
//pasando parametro
Route::get('contacto/{nombre?}/{edad?}',function($nombre="Wendy",$edad=22){
	return view('contacto',array(
			"nombre"=>$nombre,
			"edad"=>$edad
		));
})->where([
		'nombre'=>'[A-Za-z]+',		//nombre de la A-z se puede repetir indefinidamente(+)
		'edad'=>'[0-9]+'
]);