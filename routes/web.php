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

Route::get('home', 'HomeController@index')->middleware('auth');
Route::get('/profiel', 'ProfileController@index')->middleware('auth');
Route::get('/profiel/contacten', 'ProfileController@contacten')->middleware('auth');
Route::get('/profiel/gegevens', 'ProfileController@gegevens')->middleware('auth');
Route::get('/profiel/instellingen', 'ProfileController@instellingen')->middleware('auth');
Route::get('/profiel/agenda', 'ProfileController@agenda')->middleware('auth');

//Archive routes
Route::get('archief', 'ArchiveController@index')->middleware('auth');

//Reflection routes
Route::get('reflecties', 'ReflectionController@list')->middleware('auth');
Route::get('reflectie/{id}/view', 'ReflectionController@getReflection')->middleware('auth');
Route::get('reflectie/{id}/update', 'ReflectionController@updateReflection')->middleware('auth');
Route::post('reflectie/update', 'ReflectionController@storeReflection')->middleware('auth');
Route::get('reflectie/create', 'ReflectionController@newReflection')->middleware('auth');
Route::post('reflectie/create', 'ReflectionController@storeReflection')->middleware('auth');
Route::post('reflectie/delete', 'ReflectionController@deleteReflection')->middleware('auth');

//feedback routes
Route::get('feedback', 'FeedbackCOntroller@index')->middleware('auth');
Route::get('feedback/{id}/view', 'FeedbackController@getReflectionWithFeedback')->middleware('auth');
Route::post('feedback/create', 'FeedbackController@storeFeedback')->middleware('auth');
Route::post('feedback/update', 'FeedbackController@storeFeedback')->middleware('auth');

//profile routes
Route::get('/profile', 'ProfileController@index');
Route::get('/profile/settings', 'SettingsController@index');
Route::get('/profile/mydetails', 'DetailsController@index');
Route::get('/profile/agenda', 'AgendaController@index');
Route::get('/profile/contacts', 'ContactsController@index');


//reflectionmodel routes
Route::get('reflectionmodel', 'ReflectionModelController@getModel')->middleware('auth');
Route::get('reflectionmodel/{id}', 'ReflectionModelController@radar');

//Notifications routes
Route::get('/notifications', 'NotificationController@index');
Route::get('/notification/{id}/view', 'NotificationController@view');
Route::get('/notification/{id}/markAsRead', 'NotificationController@markAsRead');