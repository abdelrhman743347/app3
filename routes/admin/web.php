<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['admin'])->group(function () {

    Route::get('/admin', function () {
        return view('layouts.dashboard.x2');
    });

    Route::resource('categories', 'CategoryController');

    Route::resource('posts', 'PostController');


    //    Route::resource('dashboard', 'DashboardController');
//
//    Route::resource('users', 'UserController');
//
});
