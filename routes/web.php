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

//reflectie routes
Route::get('reflecties', 'ReflectionController@index');

Route::get('reflectie/{$id}', 'ReflectionController@index');

Route::get('reflectie/create', 'ReflectionController@view');
Route::post('reflectie/create', 'ReflectionController@create');


//feedback routes
Route::get('feedback', 'FeedbackCOntroller@index');
