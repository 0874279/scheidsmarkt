<?php

// Home
Route::get('/', 'HomeController@index')->name('home');

// Controller for form to club new matches
Route::get('/club/matches/create', 'MatchController@create');
// Controller to put new match into database
Route::post('club/matches', 'MatchController@store');
// View all posted matches
Route::get('club/matches', 'MatchController@index');
// View a specific match
Route::get('/club/matches/{match}', 'MatchController@show');

// Create a session (login)
Route::get('/login', 'SessionsController@create')->name('login');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy')->name('logout');

// Create a new account (register)
Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');