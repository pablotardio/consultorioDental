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


Auth::routes();

Route::get('/home', 'HomeController@index');





























Route::resource('especialidads', 'especialidadController');









Route::resource('pacientes', 'pacienteController');

Route::resource('recepcionistas', 'recepcionistaController');







Route::resource('pruebatests', 'pruebatestController');

Route::resource('odontologos', 'odontologoController');









Route::resource('horarios', 'horarioController');

Route::resource('citas', 'citaController');