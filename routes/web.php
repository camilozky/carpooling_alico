<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/', function () {
//     // return "HOME carpooling_alico trips";
//     echo "<a href='". route ('trips') . "'>Contactos 1</a><br>";
//     echo "<a href='". route ('trips') . "'>Contactos 2</a><br>";
//     echo "<a href='". route ('trips') . "'>Contactos 3</a><br>";
//     echo "<a href='". route ('trips') . "'>Contactos 4</a><br>";
//     echo "<a href='". route ('trips') . "'>Contactos 5</a><br>";
// });

// Route::get('contactame', function () {
//     return "Make Trips";
// })->name('trips');

// Route::get('jointrips', function () {
//     return "Join a Trip";
// })->name('jointrips');

// Route::get('modifytrips', function () {
//     return "Modify a Trip";
// })->name('modifytrips');

// Route::get('deletetrips', function () {
//     return "Delete a Trip";
// })->name('deletetrips');

// Route::get('poc/{name?}', function ($name = "Guest") {
//     return "Hi there! ".$name;
// })->name('poc');


// Route::get('/', function () {
// 	$name="Guest";
//     return view('home')->with('name', $name);
// })->name('home');

// Route::get('/', function () {
// 	$name="Guest";
//     return view('home')->with(['name' => $name]);
// })->name('home');

// Route::get('/', function () {
// 	$name="Guest";
//     return view('home', ['name' => $name]);
// })->name('home');

// Route::get('/', function () {
// 	$name="Guest";
//     return view('home', compact('name'));
// })->name('home');


App::setlocale('es');

Route::view('/', 'home')->name('home');
// Route::view('/trips', 'trips', compact('trips'))->name('trips');
Route::get('/viajes', 'TripController@index')->name('trips.index');
Route::get('/viaje/{trip}', 'TripController@show')->name('trips.show');
Route::view('/realizar-un-viaje', 'maketrip')->name('maketrip');
Route::view('/unirse-a-un-viaje', 'jointrip')->name('jointrip');
Route::post('guardar-un-viaje', 'TripController@store')->name('trips.store');

Route::get('/phpfirebase_sdk','FirebaseController@index');
// Route::resource('trips','TripController');