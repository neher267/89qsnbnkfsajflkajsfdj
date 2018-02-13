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

Route::group(['namespace'=>'Admin'], function(){
	Route::get('dashboard','DashboardController@index');
	Route::resource('questions','QuestionController');
});

Route::get('question-setup', function(){
	// $question = new \App\Question;
	// $question->category = request()->user()->category;
	// $question->subject = 'math';
	// $question->question = '5+5=?';
	// $question->weight = 5;

	// $question->save();
	// $option = new \App\Option;
	// $option->key = '1';
	// $option->value = '10'
	// $option->associate()

});

//game
Route::get('play-game/{subject}', 'GameController@index');
Route::post('/check', 'GameController@check');


