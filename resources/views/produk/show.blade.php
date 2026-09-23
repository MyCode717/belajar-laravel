@extends('layouts.app')

@section('content')

<h1>Detail Produk</h1>

<p>
    Nama Produk : {{ $produk['nama_produk'] }} <br>
    Harga : {{ number_format($produk['harga'],0,',','.') }}
</p>
<p>
    <a href="{{ route('produk.index') }}">
        Kembali ke Produk
    </a>
</p>

@endsection
