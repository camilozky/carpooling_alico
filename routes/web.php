<?php

use Illuminate\Support\Facades\Route;

App::setlocale('es');

Route::get('/', 'TripController@index')
	->name('home');
	// ->middleware('auth')

Route::get('/viajes/crear', 'TripController@create')->name('trips.create');
Route::post('/viajes', 'TripController@store')->name('trips.store');

Route::get('/viajes', 'TripController@index')->name('trips.index');
Route::get('/viajes/{trip}', 'TripController@show')->name('trips.show');

Route::get('usuarios/{user}', 'UserController@show')->name('users.show');
Route::patch('/usuarios/{user}', 'UserController@update')->name('users.update');

Route::get('/viajes/{trip}/editar', 'TripController@edit')->name('trips.edit');
Route::patch('/viajes/{trip}', 'TripController@update')->name('trips.update');

Route::get('/viajes/{trip}/inscrirse', 'TripController@sign')->name('trips.sign');
Route::patch('/viajes/{trip}/unirse', 'TripController@join')->name('trips.join');

Route::delete('/viajes/{trip}', 'TripController@destroy')->name('trips.destroy');


Route::view('/realizar-un-viaje', 'maketrip')->name('maketrip');
Route::view('/unirse-a-un-viaje', 'jointrip')->name('jointrip');

Route::get('/phpfirebase_sdk','FirebaseController@index');

Auth::routes();

Route::get('/home', 'TripController@index')
	->name('home.redirect');
	// ->middleware('auth')
