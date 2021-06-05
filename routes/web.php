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

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.'], function () {

    Route::get('/', 'AuthController@showLoginForm')->name('login');
    Route::post('login', 'AuthController@login')->name('login.do');

    Route::get('home', 'AuthController@index')->name('home');

    Route::get('list', 'ClienteController@index')->name('listing');
    Route::get('create', 'ClienteController@create')->name('create');
    Route::post('store', 'ClienteController@store')->name('store');
});
