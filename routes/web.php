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

Route::get('/','HouseController@index')->name('wel');

Route::get('/addHome','HouseController@addHomePage');
Route::post('/addHomeInfo','HouseController@homeInit')->name('addHome');
Route::post('/searching','HouseController@Search')->name('poooo');
