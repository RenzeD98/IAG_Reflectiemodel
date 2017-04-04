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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

/** Feedback **/
Route::get('/feedback', 'FeedbackController@index');
Route::post('/feedback', 'FeedbackController@create');

/** Profile **/
Route::get('/profiel', 'FeedbackController@index');
Route::patch('/profiel', 'FeedbackController@update');
Route::post('/profiel', 'FeedbackController@create');

Route::get('/spraak', 'SpraakController@index');
Route::post('/spraak', 'SpraakController@create');





