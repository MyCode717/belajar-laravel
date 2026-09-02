<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {

    $nama_ketua = "Muhammad Iqbal";
    $kelompok = 1;


    return view('home', compact('nama_ketua', 'kelompok'));
});

Route::get('/jargon', function(){
    return view('jargon');
});
