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

Route::get('/', function () {
    return view('login');
});



Route::get('/LoginBiro', function () {
    return view('Bendaharabiro.masuk');
});

Route::get('/uangkasbiro', function () {
    return view('Bendaharabiro.kas');
});

Route::get('/LoginInti', function () {
    return view('Bendaharainti.masuk2');
});

Route::get('/UangKasInti', function () {
    return view('Bendaharainti.kas2');
});

Route::get('/ApprovedInti', function () {
    return view('Bendaharainti.setuju');
});

