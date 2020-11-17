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



Route::get('/LoginBiro', function () {
    return view('Biro.masuk');
});

Route::get('/UangKasBiro', function () {
    return view('Biro.kas');
});

Route::get('/LoginInti', function () {
    return view('Inti.masuk2');
});

Route::get('/UangKasInti', function () {
    return view('Inti.kas2');
});

Route::get('/ApprovedInti', function () {
    return view('Inti.setuju');
});