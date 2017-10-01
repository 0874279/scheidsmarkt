<?php

// Controller for form to create new matches
Route::get('/create', 'MatchController@index');
// Controller to put new match into database
Route::post('create/new', 'MatchController@store');
