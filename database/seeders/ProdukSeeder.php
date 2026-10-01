<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Produk::create([
            'nama_produk'=>'Laptop ASUS ROG Strix',
            'deskripsi'=>'Laptop Gaming terbaik sepanjang masa',
            'harga'=>25000000,
            'stok'=>7
        ]);

        \App\Models\Produk::factory(30)->create();
    }
}
