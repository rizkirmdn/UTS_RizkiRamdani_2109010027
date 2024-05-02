<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home/index');
});

Route::get('produk', function () {
    return view('product/produk');
});

Route::get('tambah', function () {
    return view('tambah/tambahproduk');
});