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

Route::get('/', function () {
    return view('welcome');
});

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
Route::get('/cars', 'CarsController@index')->name('cars');
Route::redirect('/autos', '/cars');
Route::get('/cars/{category}/{id?}', 'CarsController@showCarCategory');

// Admin
Route::prefix('admin')->group(function () {
    Route::get('/', 'AdminController@index')->name('admin');
    Route::redirect('/beheerder', '/admin');

    Route::get('users', 'AdminController@showUsers')->name('adminUserpanel');
    Route::redirect('gebruikers', 'users');
});
