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
    return view('index');
});

Route::get('login', function () {
    return view('/auth/login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/header', function () {
    return view('header');
});

Route::get('/login2', function () {
    return view('login2');
});

Route::get('/index', function () {
    return view('index');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/payment', function () {
    return view('payment');
});