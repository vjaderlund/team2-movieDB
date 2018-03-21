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


//Routes for the movie MVC part
//created by Viktor Jäderlund
Route::get('/movies', 'movieController@index')->name('movies.index');
Route::get('/movies/create', 'movieController@create')->name('movies.create');
Route::post('/movies', 'movieController@store')->name('movies.store');

Route::get('/movies/{movie}/edit', 'movieController@edit')->name('movies.edit');
Route::get('/movies/{movie}', 'movieController@show')->name('movies.show');
Route::post('/movies/{movie}', 'movieController@update')->name('movies.update');