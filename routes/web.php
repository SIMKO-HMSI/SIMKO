<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/index', function () {
    return view('user.index');
});

Route::get('/Login', function () {
    return view('Login.masuk');
});

Route::get('/Uang', function () {
    return view('Uang.kas');
});

Route::get('/Login2', function () {
    return view('Login2.masuk2');
});

Route::get('/Uang2', function () {
    return view('Uang2.kas2');
});

Route::get('/Approved', function () {
    return view('Approved.setuju');
});