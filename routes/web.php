<?php

// Home
Route::get('/', 'HomeController@index')->name('home');

// Clubs
Route::get('/club/matches/create', 'MatchController@create'); // Controller for form to club new matches
Route::post('club/matches', 'MatchController@store'); // Controller to put new match into database
Route::get('club/matches', 'MatchController@index'); // View all posted matches
Route::get('/club/matches/{match}', 'MatchController@show'); // View a specific match
Route::get('club/account', 'ClubAccountController@index'); // View and edit account settings


// Refs
Route::get('ref/matches', 'RefMatchController@index'); // View all posted matches
Route::get('ref/matches/myindex', 'RefMatchController@index'); // View all responded by ref matches
Route::get('ref/account', 'RefAccountController@index'); // View and edit account settings



// Create a session (login)
Route::get('/login', 'SessionsController@create')->name('login');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy')->name('logout');

// Create a new account (register)
Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');