<?php

// Home
Route::get('/', 'HomeController@index')->name('home');

// Clubs
Route::get('/club/matches/create', 'MatchController@create'); // Controller for form to club new matches
Route::post('club/matches', 'MatchController@store'); // Controller to put new match into database
Route::get('club/matches', 'MatchController@index')->name('clubMatches'); // View all posted matches
Route::get('/club/matches/{match}', 'MatchController@show'); // View a specific match
Route::get('club/account', 'ClubAccountController@index'); // View and edit account settings
Route::get('/club/matches/destroy/{id}', 'MatchController@destroy'); // Remove match
Route::get('/club/matches/{id}/assign', 'MatchController@assignref'); // Controller to assign a referee


// Refs
Route::get('ref/matches', 'RefMatchController@index')->name('refMatches'); // View all posted matches
Route::get('ref/matches/myindex', 'RefMatchController@myindex')->name('refResponded'); // View all responded by ref matches
Route::get('ref/account', 'RefAccountController@index'); // View and edit account settings
Route::get('/ref/matches/{match}', 'RefMatchController@show'); // View a specific match
Route::post('/ref/matches/', 'RefMatchController@store'); // Respond to a match
Route::get('/ref/matches/destroy/{id}', 'RefMatchController@destroy'); // Remove response

// Create a session (login)
Route::get('/login', 'SessionsController@create')->name('login');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy')->name('logout');

// Create a new account (register)
Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');