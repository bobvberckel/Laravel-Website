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
Route::get("/about", "AboutController@about")->name("about"); // About page
Route::get("/music/{music_id}", "MusicController@music")->name("music"); // Music page
Route::get("/cars/{car_id}", "CarController@car")->name("cars"); // Car page
Route::get("/movies/{movie_id}", "MovieController@movie")->name("movies"); // Movie page
Route::get("/profile/{id}", "ProfileController@profile")->name("profile"); // Profile page
Route::get("/contact", "ContactController@showForm")->name("contact.form"); // Contact Page

Route::get('/home', 'HomeController@index')->name('home');
