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




Route::group(['middleware' => 'auth'], function(){
    
    Route::get('/', 'HomeController@index');
    
    Route::group(['prefix' => 'cuentas'], function(){

        Route::get('/', 'CuentasController@getIndex');

        Route::get('show/{id}', 'CuentasController@getShow');

        Route::get('edit/{id}', 'CuentasController@getEdit');

        Route::post('create', 'CuentasController@postCreate');

        Route::put('edit/{id}', 'CuentasController@putEdit');
    });
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
