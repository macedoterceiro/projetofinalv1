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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contatos', 'ControladorContato@index');
Route::get('/contatos/novocontato', 'ControladorContato@create');
Route::post('/contatos', 'ControladorContato@store');
Route::get('/contatos/apagar/{id}', 'ControladorContato@destroy');
Route::get('/contatos/editar/{id}', 'ControladorContato@edit');
Route::post('/contatos/{id}', 'ControladorContato@update');

Route::get('/contatos/{id}/telefones', 'ControladorTelefone@index');
Route::get('/contatos/{id}/telefones/novotelefone', 'ControladorTelefone@create');
Route::post('/contatos/{id}/telefones', 'ControladorTelefone@store');
Route::get('/contatos/{id}/telefones/apagar/{tid}', 'ControladorTelefone@destroy');
Route::get('/contatos/{id}/telefones/editar/{tid}', 'ControladorTelefone@edit');
Route::post('/contatos/{id}/telefones/{tid}', 'ControladorTelefone@update');