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

Route::get('/', 'PublicController@index');
Route::get('/contact-us', 'PublicController@contact_us');
Route::get('/about-us', 'PublicController@about_us');
Route::resource('register', 'RegisterController');

Route::get('sign-in', 'LoginController@index');
Route::post('sign-in', 'LoginController@login');
Route::post('logout', 'LoginController@logout');
Route::resource('profile', 'ProfileController');

Route::post('validation', 'ValidationController@mobile_validate');
Route::get('/home', 'HomeController@index')->name('home');
