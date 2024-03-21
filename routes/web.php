<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/main', function () {
    return view('main');
});

Route::get('/biodata', function () {
    return view('biodata');
});

Route::get('/produk', function () {
    return view('produk');
});

Route::get('/buku-tamu', function () {
    return view('buku-tamu');
});

