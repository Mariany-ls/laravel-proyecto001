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


Route::get('/hola-mundo', function(){
    return "Hola mariany";
}); 

Route::post('/contacto', function(){
    return "formulario de contacto";
});

Route::post('/productos', function(){
    return "Productos";
});