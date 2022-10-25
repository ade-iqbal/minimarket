<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->dateTime("tanggal");
            $table->unsignedBigInteger("customer_id");
            $table->unsignedBigInteger("produk_id");
            $table->integer("jumlah");
            $table->timestamps();

            $table->foreign("customer_id")->references("id")->on("customer")->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign("produk_id")->references("id")->on("produk")->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
};
