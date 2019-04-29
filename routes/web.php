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
Auth::routes();

Route::get('/home/{page?}', 'HomeController@index')->name('home');
Route::post('/home', 'HomeController@news')->name('news');
Route::get('/', 'HomeController@index')->name('home');
