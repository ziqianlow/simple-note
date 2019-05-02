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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test','PageController@test')->name('test');

Route::get('/welcome','PageController@welcome')->name('welcome');
Route::get('/test2','PageController@test2')->name('test2');
Route::get('/aboutme','PageController@aboutme')->name('aboutme');
Route::get('/myhobby','PageController@myhobby')->name('myhobby');
Route::get('/contactme','PageController@contactme')->name('contactme');
