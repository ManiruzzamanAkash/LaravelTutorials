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

Route::get('/', 'EmailController@index')->name('index');

Route::post('/send', 'EmailController@send_email')->name('send_email');

Route::post('/send-custom', 'EmailController@send_custom')->name('custom_mail');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
