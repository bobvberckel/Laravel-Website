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

Route::get("/", 'HomeController@index')->name("home");
Route::get("/about/", "AboutController@about")->name("about"); // About page
Route::get("/music/", "MusicController@music")->name("music"); // Music page
Route::get("/cars/", "CarController@car")->name("cars"); // Car page
Route::get("/movies/", "MovieController@movie")->name("movies"); // Movie page
Route::post("/profile/", "ProfileController@getData")->name("profile"); // Profile page
Route::view("/profile/", "profile/profile");
Route::get("/contact", "ContactController@showForm")->name("contact.form"); // Contact Page
