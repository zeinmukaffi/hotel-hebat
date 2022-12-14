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
        Schema::create('kamars', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nomor_kamar');
            $table->string('tipe_kamar');
            // $table->foreignId('kamar_id');
            $table->integer('jumlah_kamar');
            $table->string('fasilitas_kamar');
            $table->string('foto_kamar');
            $table->integer('harga_kamar');
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
        Schema::dropIfExists('kamars');
    }
};
