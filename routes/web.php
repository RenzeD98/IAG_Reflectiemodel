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
Route::get('reflecties', 'ReflectionController@list');
Route::get('reflectie/{id}/view', 'ReflectionController@getReflection');
Route::get('reflectie/{id}/update', 'ReflectionController@updateReflection');
Route::post('reflectie/update', 'ReflectionController@storeReflection');
Route::get('reflectie/create', 'ReflectionController@newReflection');
Route::post('reflectie/create', 'ReflectionController@storeReflection');

//feedback routes
Route::get('feedback', 'FeedbackCOntroller@index');

//reflectionmodel routes
Route::get('reflectionmodel', 'ReflectionModelController@getModel');
Route::get('feedback/{id}/view', 'FeedbackCOntroller@getFeedback');
Route::post('feedback/create', 'FeedbackCOntroller@storeFeedback');
Route::post('feedback/update', 'FeedbackCOntroller@storeFeedback');
