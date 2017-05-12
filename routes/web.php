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
Route::get('feedback/{id}/view', 'FeedbackCOntroller@getFeedback');
Route::post('feedback/create', 'FeedbackCOntroller@storeFeedback');
Route::post('feedback/update', 'FeedbackCOntroller@storeFeedback');

//profile routes
Route::get('/profile', 'ProfileController@index');
Route::get('/profile/settings', 'SettingsController@index');
Route::get('/profile/mydetails', 'DetailsController@index');
Route::get('/profile/agenda', 'AgendaController@index');
Route::get('/profile/contacts', 'ContactsController@index');


//reflectionmodel routes
Route::get('reflectionmodel', 'ReflectionModelController@getModel');
//individuele radar routes
// Route::get('reflectionmodel/{radar}', 'ReflectionModelController@radar');

Route::get('reflectionmodel/theory', 'ReflectionModelController@theory');
Route::get('reflectionmodel/model', 'ReflectionModelController@model');
Route::get('reflectionmodel/focus', 'ReflectionModelController@focus');
Route::get('reflectionmodel/strategy', 'ReflectionModelController@strategy');
Route::get('reflectionmodel/methodology', 'ReflectionModelController@methodology');
Route::get('reflectionmodel/feedback,', 'ReflectionModelController@feedback');
Route::get('reflectionmodel/transparent', 'ReflectionModelController@transparent');
Route::get('reflectionmodel/custom', 'ReflectionModelController@custom');

