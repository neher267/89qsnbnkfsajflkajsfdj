<?php


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

Route::get('question/{subject}/{year}/{class}' , 'QuestionController@show');

//game
Route::get('play-game/{subject}', 'GameController@index');
Route::post('/check', 'GameController@check');
