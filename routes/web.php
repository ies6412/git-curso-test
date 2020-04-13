<?php

use Illuminate\Support\Facades\Route;

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

/*route::get('Deporte/deporte',function(){
 return view('Deporte.deporte');
})->name('deporte');*/

route::get('Deporte/deporte','DeporteControlador@index')->name('deporte.index');
route ::post('Deporte/deporte','DeporteControlador@store')->name('deporte.store');
route ::get('Deporte/actualizar/{id}','DeporteControlador@show')->name('deporte.show');
route::put('Deporte/actualizar/{id}','DeporteControlador@edit')->name('deporte.edit');
route::delete('Deporte/deporte/{id}','DeporteControlador@destroy')->name('deporte.destroy');

//para Actores
route::get('Actor/actor','ActorControlador@index')->name('actor.index');
route::post('Actor/actor','ActorControlador@store')->name('actor.store');//cuando se pasa con ajax ... el nombre de la ruta debe ser una sola palabra, no puntosque separen.
route::get('Actor/actor/{id}','ActorControlador@show')->name('actor.show');
route::put('Actor/actor','ActorControlador@update')->name('actor.update');
route::delete('Actor/actor/{id}','ActorControlador@destroy')->name('actor.destroy');





