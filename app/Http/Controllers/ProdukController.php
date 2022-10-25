<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function create()
    {
        return view('produk.create');
    }


    public function store(Request $request)
    {
        // validasi inputan
        $validated = $request->validate([
            'nama' => 'required|max:50',
            'harga' => 'required',
            'jumlah' => 'required'
        ]);

        // menyimpan data produk
        Produk::create($validated);

        return redirect()->back();
    }


    public function index()
    {
        // ambil semua data produk
        $produk = Produk::all();

        return view('produk.index', compact('produk'));
    }


    public function destroy(Produk $produk)
    {
        // menghapus data produk
        $produk->delete();

        return redirect()->back();
    }

    
    public function edit(Produk $produk)
    {
        return view('produk.edit', compact('produk'));
    }


    public function update(Request $request, Produk $produk)
    {
        // validasi inputan
        $validated = $request->validate([
            'nama' => 'required|max:50',
            'harga' => 'required',
            'jumlah' => 'required'
        ]);

        $produk->update($validated);

        return redirect('/produk/list');
    }
}
