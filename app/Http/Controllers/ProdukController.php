<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    private function dataProduk(){
        return [
            ['nama_produk' => 'ASUS ROG Strix G15', 'harga' => '20000000'],
            ['nama_produk' => 'XIAOMI 18', 'harga' => '17000000'],
            ['nama_produk' => 'SAMSUNG S26 ULTRA', 'harga' => '26700000']
        ];
    }


    public function index(){
        $produks = $this->dataProduk();

        return view('produk.index', compact('produks'));
    }

    public function show($id){
        $produks = $this->dataProduk();

        if($id >= count($produks)){
            abort(404);
        }

        $produk = $produks[$id];

        return view('produk.show', compact('produk'));
    }
}
