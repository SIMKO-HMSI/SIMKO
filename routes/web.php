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

//biro
Route::get('/homepagebiro', function () {
    return view('bendaharabiro.homepage');
});
Route::get('/anggotabiro', function () {
    return view('bendaharabiro.anggota');
});
Route::get('/profilbiro', function () {
    return view('bendaharabiro.profil');
});
Route::get('/uangkasbiro', function () {
    return view('bendaharabiro.profil');
});

//inti
Route::get('/homepageinti', function () {
    return view('bendaharainti.homepage');
});
Route::get('/anggotainti', function () {
    return view('bendaharainti.anggota');
});
Route::get('/profilinti', function () {
    return view('bendaharainti.profil');
});
Route::get('/uangkasinti', function () {
    return view('bendaharainti.profil');
});
