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

Route::get('home', 'HomeController@index');

Route::get('/profiel', 'ProfileController@index');

//reflectie
Route::get('reflection', 'ReflectionController@index');

Route::get('reflection.create', 'ReflectionController@create');

//Reflectie model
Route::get('reflectiemodel', 'ReflectiemodelController@index');
