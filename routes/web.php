<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {

    $nama_ketua = "Muhammad Iqbal";
    $kelompok = 4;


    return view('home', compact('nama_ketua', 'kelompok'));
});

Route::get('/jargon', function(){
    return view('jargon');
});

Route::get('/biodata/{biodata}', function($biodata){

$nama = null;
$N_panggilan = null;
$kelompok = 6;
$kesukaan = null;
$hobi = null;

switch ($biodata){
    case "iqbal":
        $nama = "Muhammad Iqbal Nursyabab";
        $N_panggilan = "Iqbal";
        $kesukaan = "Menulis cerita";
        $hobi = "bermain badminton";
        break;
    case "reihan" :
        $nama = "Reihan Agil Ihwana";
        $N_panggilan = "Reihan";
        $kesukaan = "Mie Ayam";
        $hobi = "Bermain Game";
        break;
    case "waska" :
        $nama = "Waska Agung Riyanto";
        $N_panggilan = "Waska";
        $kesukaan = "Menonton Film";
        $hobi = "Mancing";
        break;
    case "anam" :
        $nama = "Nuzullul Anam";
        $N_panggilan = "Anam";
        $kesukaan = "Musik";
        $hobi = "Dengerin Musik";
        break;
    default :
        $nama = "-";
        $N_panggilan = "-";
        $kesukaan = "-";
        $hobi = "-";

}
    return view('biodata', compact('nama','N_panggilan','kelompok', 'kesukaan', 'hobi'));
});