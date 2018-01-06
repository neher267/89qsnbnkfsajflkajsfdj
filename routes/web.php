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
Route::get('/sign-in', 'PublicController@sign_in');
Route::get('/sign-up', 'PublicController@sign_up');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
