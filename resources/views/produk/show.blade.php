@extends('layouts.app')

@section('content')

<h1>Detail Produk</h1>

<p>
    ID          : {{ $produk->id }}<br>
    Nama Produk : {{ $produk->nama_produk}} <br>
    Harga       : Rp {{ number_format($produk->harga,0,',','.') }}<br>
    Stok tersisa: {{ $produk->stok > 0 ? $produk->stok : 'Habis'}} 
</p>
<p>
    <a href="{{ route('produk.index') }}">&larr;
        Kembali ke Produk
    </a>
</p>

@endsection
