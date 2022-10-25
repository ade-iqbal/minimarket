<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Produk;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksi = Transaksi::all();
        return view("transaksi.index", compact("transaksi"));
    }

    public function create()
    {
        $customer = Customer::all();
        $produk = Produk::all();
        return view("transaksi.create", compact("customer", "produk"));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            "customer_id" => "required",
            "produk_id" => "required",
            "jumlah" => "required|min:1"
        ]);

        $validated["tanggal"] = date("Y-m-d h:i:s");
        Transaksi::create($validated);

        $produk = Produk::find($validated["produk_id"]);
        $produk->update([
            "jumlah" => $produk->jumlah - $validated["jumlah"]
        ]);

        return redirect('/transaksi/list');
    }
}
