<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', 'MainController@home') -> name('home');
Route::get('/filtered', 'MainController@filtered') -> name('filtered');
