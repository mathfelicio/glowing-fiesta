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
//config do plugin vue-route-laravel
Route::get('/vue/route/{name}', 'RouteController@index')->middleware('auth');

Route::get('/', 'ContatoController@index')->name('index');

Route::group(['as' => 'contato.'], function (){
    Route::get('/contato-create', 'ContatoController@create')->name('create');
    Route::get('/contato-edit/{id}', 'ContatoController@edit')->name('edit');
    Route::put('/contato-update/{id}', 'ContatoController@update')->name('update');
    Route::get('/buscar-contatos', 'ContatoController@buscar')->name('buscar');
    Route::post('/store-contato', 'ContatoController@store')->name('store');
    Route::get('/confirmar-remocao/{id}', 'ContatoController@confirm')->name('confirm');
    Route::post('/delete-contato/{id}', 'ContatoController@delete')->name('delete');
});


