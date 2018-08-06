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

Route::get('/', 'ProductosControlador@listar');
Route::get('/productos/agregar', 'ProductosControlador@agregar');
Route::post('/productos/guardar', 'ProductosControlador@guardar');
Route::get('/productos/listar', 'ProductosControlador@listar');
Route::get('/productos/editar/{id}', 'ProductosControlador@editar');
Route::post('/productos/editarG/{id}', 'ProductosControlador@editarGuardar');
Route::get('productos/mostrar/', 'ProductosControlador@mostrar');
Auth::routes();
