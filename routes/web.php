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

// This route *will* be changed to the homepage.
Route::get('/', function () {
    return view('welcome');
});

// ID's zijn nog niet uitgewerkt.
Route::get("/about", "aboutController@about"); // About page
Route::get("/music/{music_id}", "musicController@music"); // Music page
Route::get("/cars/{car_id}", "carController@car"); // Car page
Route::get("/movies/{movie_id}", "movieController@movie"); // Movie page
Route::get("/profile/{id}", "profileController@profile"); // Profile page
