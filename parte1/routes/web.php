<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'MainController@home') -> name('home');
Route::get('/blog', 'MainController@blog') -> name('blog');
Route::get('/about', 'MainController@about') -> name('about');
