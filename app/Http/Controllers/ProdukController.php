<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('produk.index')->with([
            'produk' => Produk::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'namaproduk' => 'required|min:3',
            'kategori' => 'required|min:3',
            'deskripsi' => 'required|min:8',
            'harga' => 'required|min:6',
            'fotoproduk' => 'required|mimes:jpg,jpeg,png',   
        ]);
        $foto_file = $request->file('fotoproduk');
        $foto_ekstensi = $foto_file->extension();
        $foto_nama = date('ymdhis').".". $foto_ekstensi;
        $foto_file->move(public_path('fotoproduk'), $foto_nama);

        $produk = new Produk;
        $produk->namaproduk = $request->namaproduk;
        $produk->kategori = $request->kategori;
        $produk->deskripsi = $request->deskripsi;
        $produk->harga = $request->harga;
        $produk->fotoproduk = $foto_nama;
        $produk->save();

        return to_route('produk.index')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
