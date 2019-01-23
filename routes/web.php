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
|Aquí es donde se ingresan todas las rutas que el proyecto debe tener
*/

//Ruta para cargar la página de inicio. La voy a sobreescribir
//Route::get('/', function () {
  //  return view('welcome');
//});

Route::get('', 'userscontroller@index'); //Luego vamos a userscontrolloer.php --> function index

Route::resource('user', 'userscontroller');
