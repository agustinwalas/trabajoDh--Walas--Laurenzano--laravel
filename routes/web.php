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

Route::get('/', 'miControlador@index');
Route::get('/productos/agregar', 'productosControlador@agregar');
Route::post('/productos/guardar', 'productosControlador@guardar');
Route::get('/productos/listar', 'productosControlador@listar');
Route::get('/productos/editar/{id}', 'productosControlador@editar');
Route::post('/productos/editarG/{id}', 'productosControlador@editarGuardar');
Route::get('productos/mostrar/', 'productosControlador@mostrar');
