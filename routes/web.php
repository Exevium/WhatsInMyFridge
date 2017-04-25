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
    return view('welcome'); // resources/views/welcome.blade.php
});

Route::get('test', function () {
    return view('test'); // resources/views/test.blade.php
});

Auth::routes();

Route::get('/home', 'HomeController@index');
