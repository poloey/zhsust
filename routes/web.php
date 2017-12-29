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
})->name('home');

Route::get('dashboard/teacher', 'PageController@teacher');
Route::get('dashboard/student', 'PageController@student');
Route::get('dashboard/admin', 'PageController@admin');
