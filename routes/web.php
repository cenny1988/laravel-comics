<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@home' ) -> name('home');

Route::get('test','HomeController@test' ) -> name('test');
