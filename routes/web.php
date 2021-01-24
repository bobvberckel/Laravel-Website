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

Route::get('/', 'HomeController@index')->name('homepage');

// About
Route::get('/about', 'AboutController@index')->name('about');
Route::redirect('/overons', '/about');

// Profile
Route::get('/profile', 'ProfileController@index')->name('profile');
Route::redirect('/profiel', '/profile');
//
Route::get('/register', 'ProfileController@register')->name('register');
Route::post('/register/emailconfirmation', 'ProfileController@registeremail');
Route::redirect('/registreren', '/register');
//
Route::get('/login', 'ProfileController@login')->name('login');
Route::redirect('/inloggen', '/login');

// Contact
Route::get('/contact', 'ContactController@index')->name('contact');
Route::post('/contact/sendmail', 'ContactController@sendmail');

// Cars
Route::get('/cars/{category?}/{id?}', 'CarsController@index')->name('cars');
Route::redirect('/autos', '/cars');
Route::get('/addcar', 'AddCarsController@create')->name('addCars');
Route::post('/addcar/', 'AddCarsController@store')->name('saveCars');
Route::get('/viewcar/{carid}', 'AddCarsController@show')->name('viewcar');
