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

Route::get('/','Doe\DoeController@index')->name('donor');
Route::post('/donor/do','Doe\DoeController@registerDonor')->name('donor.do');

