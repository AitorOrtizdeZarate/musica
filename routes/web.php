<?php

use Illuminate\Support\Facades\Route;

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

Route::resource('cantante', 'cantanteController');
Route::get('cantante/{id}/crearalbum', 'albumController@createAlbum')->name('album.createAlbum');
Route::get('album/{id}/crearcancion', 'cancionesController@createCancion')->name('cancion.createCancion');
Route::get('album/{id}/crearcancion2', 'cancionesController@createCancion2')->name('cancion.createCancion2');
Route::resource('album', 'albumController');
Route::resource('cancion', 'cancionesController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/verify', 'HomeController@verify')->name('verify');


Route::get('fav', function () {
	return view('fav');
})->middleware('email');

