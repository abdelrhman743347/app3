<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/', function () {
//    return view('front.home');
//});
Route::get('/', 'FrontController@index');
Route::get('category/{id}','FrontController@category' );
Route::get('post/{id}','FrontController@post' );

