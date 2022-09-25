<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('CREATE TRIGGER insert_pemesanan after INSERT ON pemesanans
        FOR EACH ROW
        BEGIN UPDATE kamars set
        jumlah_kamar = jumlah_kamar - NEW.jumlah_kamar_pesan
        WHERE kamars.nomor_kamar = NEW.nomor_kamar_id;
        END'
    );
        DB::unprepared('CREATE TRIGGER delete_pemesanan after UPDATE ON pemesanans
        FOR EACH ROW
        BEGIN UPDATE kamars set
        jumlah_kamar = jumlah_kamar + OLD.jumlah_kamar_pesan
        WHERE kamars.nomor_kamar = OLD.nomor_kamar_id;
        END'
    );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER insert_pemesanan');
        DB::unprepared('DROP TRIGGER delete_pemesanan');
    }
};
