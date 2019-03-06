<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksiPeminjaman extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_transaksi_peminjaman', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_film');
            $table->string('nama_peminjaman');
            $table->string('no_ktp');
            $table->string('foto_ktp');
            $table->date('tgl_pinjam');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_transaksi_peminjaman');
    }
}
