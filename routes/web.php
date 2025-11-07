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

// Ruta principal (español por defecto)
Route::get('/', function () {
    return view('welcome');
})->middleware('locale');

Auth::routes();

// Rutas con soporte de idiomas
Route::group(['prefix' => '{locale}', 'where' => ['locale' => 'es|en|pt'], 'middleware' => 'locale'], function() {
    Route::get('/', function () {
        return view('welcome');
    })->name('home.locale');
    
    Route::get('/aboutus', 'AboutController@index')->name('about.locale');
    Route::get('/contactus', 'ContactController@index')->name('contact.locale');
    Route::get('/room/detail/{room}', 'RoomController@index')->name('room.locale');
    Route::get('/covid', 'CovidController@index')->name('covid.locale');
});

// Rutas sin prefijo (compatibilidad)
Route::get('/home', 'HomeController@index')->name('home')->middleware('locale');
Route::get('/aboutus', 'AboutController@index')->middleware('locale');
Route::get('/contactus', 'ContactController@index')->middleware('locale');
Route::get('/room/detail/{room}', 'RoomController@index')->middleware('locale');
Route::get('/covid', 'CovidController@index')->middleware('locale');

// Rutas POST (sin prefijo de idioma)
Route::post('/message/store', 'MessageController@store');

// Ruta para cambiar idioma
Route::get('/lang/{locale}', function($locale) {
    if (in_array($locale, ['es', 'en', 'pt'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
})->name('lang.switch');
