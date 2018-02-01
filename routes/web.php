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
Route::get('/', 'StudentController@index')->name('index');
Route::get('/create', 'StudentController@create')->name('create');

Route::post('/store', 'StudentController@store')->name('store');
