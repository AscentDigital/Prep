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

Route::get('/', 'SessionsController@login');
Route::post('/', 'SessionsController@sigin');
Route::get('/logout', 'SessionsController@destroy');
Route::get('/register', 'SessionsController@create');

Route::get('/api/inbound', 'InboundSmsController@receive');
