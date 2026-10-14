@extends('layouts.app')
<style>
    thead{
        font-weight: 400;
        background-color: #8174FA;
    }
</style>
@section('content')
<div class="container">
    <h1 class="text-center">Daftar Produk</h1>

<table border="1" cellpadding="5" class="table table-bordered my-4 mx-auto w-75">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ( $produks as $produk )
        <tr>
            <td>{{ $produk->id }}</td>
            <td>{{ $produk->nama_produk }}</td>
            <td>Rp{{ number_format($produk->harga,0,',','.') }}</td>
            <td>{{ $produk->stok }}</td>
            <td><a href="{{ route('produk.show', $produk->id) }}">Lihat Detail</a></td>
        </tr>
        @empty
        <tr>
            <td colspan="5">Belum ada data produk.</td>
        </tr>
        @endforelse
        
    </tbody>
</table>   

</div>
@endsection
