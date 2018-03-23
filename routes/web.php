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

//Routes for the actor MVC part
//created by Radhika Sonawane
Route::get('/actors', 'actorController@index')->name('actors.index');
Route::get('/actors/create', 'actorController@create')->name('actors.create');
Route::post('/actors', 'actorController@store')->name('actors.store');

Route::get('/actors/{actor}/edit', 'actorController@edit')->name('actors.edit');
Route::get('/actors/{actor}', 'actorController@show')->name('actors.show');
Route::post('/actors/{actor}', 'actorController@update')->name('actors.update');

Route::get('/directors', 'directorController@index')->name('directors.index');
Route::get('/directors/create', 'directorController@create')->name('directors.create');
Route::post('/directors', 'directorController@store')->name('directors.store');

Route::get('/directors/{director}/edit', 'directorController@edit')->name('directors.edit');
Route::get('/directors/{director}', 'directorController@show')->name('directors.show');
Route::post('/directors/{director}', 'directorController@update')->name('directors.update');
