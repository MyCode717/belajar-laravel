<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{

    private function dataKategori(){
        return [
            ['nama_kategori' => 'Komputer'],
            ['nama_kategori' =>'Laptop'],
            ['nama_kategori' =>'Tablet']
        ];
    }

    public function index()
    {
        $kategoris = $this->dataKategori();

        return view('kategori.index', compact('kategoris'));
    }

    public function create()
    {
        return view('kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "Kategori dengan nama:{$request->nama_kategori} telah berhasil disimpan";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kategoris = $this->dataKategori();

        if($id >= count($kategoris)){
            abort(404);
        }

        $kategori = $kategoris[$id];
        return view('kategori.show', compact('kategori'));

        }

    public function edit(string $id)
    {
        $kategoris = $this->dataKategori();

        if($id >= count($kategoris)){
            abort(404);
        }

        $kategori = $kategoris[$id];
        return view('kategori.edit', compact('id', 'kategori'));
    }

    public function update(Request $request, string $id)
    {
        return "Kategori dengan id:{$id} Telah berhasil diupdate";
    }

    public function destroy(string $id)
    {
        return "Kategori dengan id:{$id} Telah berhasil dihapus";
    }
}
