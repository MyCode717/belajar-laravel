<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::resource('produk', ProdukController::class);
Route::resource('kategori', KategoriController::class);
