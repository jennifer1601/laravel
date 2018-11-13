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

// home
Route::get('/','indexController@index');

// about us
Route::get('/about','indexController@index');

// service
Route::get('/services','indexController@index');

// team
Route::get('/team','indexController@index');

// contact us
Route::get('/contact','indexController@index');

// achievement
Route::get('/achievement','indexController@index');

// blogdetail
Route::get('/blog','indexController@index');