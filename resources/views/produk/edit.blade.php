@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Edit</title>
    <style>
        form {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-top: 50px;
        }

        h1 {
            display: flex;
            justify-content: center;
        }
        td {
            padding: 10px;
        }
    </style>
</head>
<body>
    <h1>Edit Produk</h1>

    <form action="{{ route('produk.update', $produk->id) }}" method="post">
        @csrf
        @method('PUT')
        <table>
        <tr>
            <td><label>Nama Produk:</label></td>
            <td><input type="text" name="nama_produk" value="{{ $produk->nama_produk }}"></td>
        </tr>
        <tr>
            <td><label>Harga:</label></td>
            <td><input type="number" name="harga" value="{{ $produk->harga }}"></td>
        </tr>
        <tr>
            <td><label>Stok:</label></td>
            <td><input type="number" name="stok" value="{{ $produk->stok }}"></td>
        </tr>
        <tr>
            <td colspan="3"><center><button type="submit">
                Simpan</button></center></td>
        </tr>
        </table>
    </form>
    <p><a href="{{ route('produk.index') }}">
        <center>Kembali ke Produk</center>
    </a></p>
</body>
</html>
@endsection