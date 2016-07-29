<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Main Routes
Route::get('/', 'PagesController@Index');
Route::get('About', 'PagesController@About');
Route::get('Events', 'PagesController@Events');
Route::get('Speakers', 'PagesController@Speakers');
Route::get('Contact', 'PagesController@Contact');

//Events Routes
Route::get('Admin', 'eventController@Index');
Route::resource('Admin/Events/', 'eventController');
Route::post('Admin/Events/store', 'eventController@store');
Route::resource('Admin/Events/edit', 'eventController@edit');
Route::post('Admin/Events/update/{id}', 'eventController@update');
Route::delete('Admin/Events/destroy/{id}', 'eventController@destroy');

//Speakers Routes
Route::resource('Admin/Speakers/', 'speakersController');
Route::post('Admin/Speakers/store', 'speakersController@store');
Route::resource('Admin/Speakers/edit', 'speakersController@edit');
Route::post('Admin/Speakers/update/{id}', 'speakersController@update');
Route::delete('Admin/Speakers/destroy/{id}', 'speakersController@destroy');

//Forms Routes
Route::post('Admin/Forms/store', 'Forms@store');
Route::resource('Admin/Forms/', 'Forms');
