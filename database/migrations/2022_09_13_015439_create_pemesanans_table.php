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
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('alamat');
            $table->string('email');
            $table->bigInteger('no_telp');
            $table->foreignId('nomor_kamar_id');
            $table->integer('jumlah_kamar_pesan');
            $table->date('tanggal_checkin');
            $table->date('tanggal_checkout');
            $table->enum('status',['CheckIn','CheckOut']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemesanans');
    }
};
