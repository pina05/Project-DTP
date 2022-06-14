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


Route::get('charts.html', function () {
    return view('charts');
});

Route::get('index.html', function () {
    return view('index');
});

Route::get('layout-sidenav-light.html', function () {
    return view('layout-sidenav-light');
});

Route::get('layout-static.html', function () {
    return view('layout-static');
});

Route::get('login.html', function () { 
    return view('login');
});

Route::get('password.html', function () {
    return view('password');
});

Route::get('register.html', function () {
    return view('register');
});

Route::get('/barang.html', '\App\Http\Controllers\barangcontroller@barang');

Route::get('/detail.html', '\App\Http\Controllers\detailcontroller@detail');

Route::get('/stock.html', '\App\Http\Controllers\stockcontroller@stock');

Route::get('/tables.html', '\App\Http\Controllers\pegawaicontroller@index');