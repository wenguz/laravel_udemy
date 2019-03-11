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
/*
Route::get('/', function () {
    return view('welcome');
});
//Ruta para mostrar una vista estatica:se pone en el  buscador
Route::get('/hola-mundo',function(){
	return view('hola-mundo');
});
//pasando parametro
Route::get('contacto/{nombre?}/{edad?}',function($nombre="Wendy",$edad=null){
	/*return view('contacto',array(
			"nombre"=>$nombre,
			"edad"=>$edad
		));
		*/
		/*
	return view('contacto.contacto')
		->with('nombre',$nombre)
		->with('edad',$edad)
		->with('frutas',array('naranja','manzana','frutilla','Piña','Pera'));
})->where([
		'nombre'=>'[A-Za-z]+',		//nombre de la A-z se puede repetir indefinidamente(+)
		'edad'=>'[0-9]+'
]);
*/


//RUTAS PARA EL PROYECTO TIENDA

Route::get('products',function(){
	return view('products.index'); //en views:carpeta products archivo index
})->name('products.index');

Route::get('products/create',function(){
	return view('products.create');//en views:carpeta products archivo create
})->name('products.create');	//este names:sera con el quie se mande al clickear el boton nuevo producto en la vista index de prodcuts