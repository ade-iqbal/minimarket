<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produk::create([
            "nama" => "produk 1",
            "harga" => 15000,
            "jumlah" => 90
        ]);
        Produk::create([
            "nama" => "produk 2",
            "harga" => 15000,
            "jumlah" => 90
        ]);
        Produk::create([
            "nama" => "produk 3",
            "harga" => 15000,
            "jumlah" => 90
        ]);
        Produk::create([
            "nama" => "produk 4",
            "harga" => 15000,
            "jumlah" => 90
        ]);
        Produk::create([
            "nama" => "produk 5",
            "harga" => 15000,
            "jumlah" => 90
        ]);
        Produk::create([
            "nama" => "produk 6",
            "harga" => 15000,
            "jumlah" => 90
        ]);
        Produk::create([
            "nama" => "produk 7",
            "harga" => 15000,
            "jumlah" => 90
        ]);
        Produk::create([
            "nama" => "produk 8",
            "harga" => 15000,
            "jumlah" => 90
        ]);
        Produk::create([
            "nama" => "produk 9",
            "harga" => 15000,
            "jumlah" => 90
        ]);
        Produk::create([
            "nama" => "produk 10",
            "harga" => 15000,
            "jumlah" => 90
        ]);
    }
}
