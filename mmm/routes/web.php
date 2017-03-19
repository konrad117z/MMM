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
    return view('hello');
});


Route::get('login', function () {
    return view('login');
});
Route::get('redidect', function () {
    return view('redidect');
});
Route::get('callback', function () {
    return view('callback');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
