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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/aboutus', 'AboutController@index');
Route::get('/contactus', 'ContactController@index');
Route::get('/room/detail/{room}', 'RoomController@index');
Route::post('/message/store', 'MessageController@store');
Route::get('/covid', 'CovidController@index');
