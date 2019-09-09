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
///
Route::get('/estudiantes', 'EstudiantesController@index')->name('estudiantes');
Route::post('/estudiantes', 'EstudiantesController@store')->name('estudiantes-store');
Route::get('/estudiantes/edit/{id}', 'EstudiantesController@edit')->name('estudiantes-edit');
Route::post('/estudiantes/update/{id}', 'EstudiantesController@update')->name('estudiantes-update');
Route::get('/estudiantes/destroy/{id}', 'EstudiantesController@destroy')->name('estudiantes-destroy');
///estudiantes
Route::get('/carreras', 'CarrerasController@index')->name('carreras');
Route::post('/carreras', 'CarrerasController@store')->name('carreras-store');
Route::get('/carreras/edit/{id}', 'CarrerasController@edit')->name('carreras-edit');
Route::post('/carreras/update/{id}', 'CarrerasController@update')->name('carreras-update');
Route::get('/carreras/destroy/{id}', 'CarrerasController@destroy')->name('carreras-destroy');

