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

/*Adminisitrador*/
Route::get('/registroHome', function() {
    return view('registroHome');
})->name('registroHome');

Route::get('/tableHome', function() {
    return view('tableHome');
})->name('tableHome');

/*Get escuelas*/
Route::get('/escuelas', function() {
    return view('escuelas');
})->name('escuelas');

// Nos mostrará el formulario de login.
Route::get('login', 'AuthController@showLogin');

// Validamos los datos de inicio de sesión.
Route::post('login', 'AuthController@postLogin');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
