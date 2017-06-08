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

Route::get('/home', 'Homecontroller@index');

//profile routes
Route::get('/profile', 'ProfileController@index');
Route::get('/profile/settings', 'SettingsController@index');
Route::get('/profile/mydetails', 'MyDetailsController@index');
Route::post('/profile/mydetails', 'MyDetailsController@update');
Route::get('/profile/agenda', 'AgendaController@index');
Route::get('/profile/contacts', 'ContactsController@index');

//Archive routes
Route::get('archive', 'ArchiveController@index');
Route::get('archive/search', 'ArchiveController@search');

//Reflection routes
Route::get('reflecties', 'ReflectionController@list');
Route::get('reflectie/{id}/view', 'ReflectionController@getReflection');
Route::get('reflectie/{id}/update', 'ReflectionController@updateReflection');
Route::post('reflectie/update', 'ReflectionController@storeReflection');
Route::get('reflectie/create', 'ReflectionController@newReflection');
Route::post('reflectie/create', 'ReflectionController@storeReflection');
Route::post('reflectie/delete', 'ReflectionController@deleteReflection');

//feedback routes
Route::get('feedback', 'FeedbackCOntroller@index');
Route::get('feedback/{id}/view', 'FeedbackController@getReflectionWithFeedback');
Route::post('feedback/create', 'FeedbackController@storeFeedback');
Route::post('feedback/update', 'FeedbackController@storeFeedback');

//reflectionmodel routes
Route::get('reflectionmodel', 'ReflectionModelController@getModel');
Route::get('reflectionmodel/{id}/radar', 'ReflectionModelController@radar');
Route::get('reflectionmodel/{id}/position', 'ReflectionModelController@position');

//Notifications routes
Route::get('/notifications', 'NotificationController@index');
Route::get('/notification/{id}/view', 'NotificationController@view');
Route::get('/notification/{id}/markAsRead', 'NotificationController@markAsRead');

//Admin routes
Route::get('/admin', 'AdminController@index');
