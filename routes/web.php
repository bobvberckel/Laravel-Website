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

Route::get("/about", "aboutController@about"); // About page
Route::get("/music", "musicController@music"); // Music page
Route::get("/cars", "carController@car"); // Car page
Route::get("/movies", "movieController@movie"); // Movie page
