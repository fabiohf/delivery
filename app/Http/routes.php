<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('admin/categorias', ['as' => 'admin.categorias', 'uses' => 'CategoriasController@index']);
Route::get('admin/categorias/novo', ['as' => 'admin.categorias.novo', 'uses' => 'CategoriasController@novo']);
Route::post('admin/categorias/gravar', ['as' => 'admin.categorias.gravar', 'uses' => 'CategoriasController@gravar']);

