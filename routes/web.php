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

/** Feedback **/
Route::get('/feedback', 'FeedbackController@index');
Route::post('/feedback', 'FeedbackController@create');

/** Profile **/
Route::get('/profiel', 'ProfielController@index');
Route::get('/profiel/add', 'ProfielController@add');
Route::patch('/profiel', 'ProfielkController@update');
Route::post('/profiel', 'ProfielController@create');

Route::get('/spraak', 'SpraakController@index');
Route::post('/spraak', 'SpraakController@create');

/* Upload image */

Route::get('/overzicht', 'OverzichtController@index');
