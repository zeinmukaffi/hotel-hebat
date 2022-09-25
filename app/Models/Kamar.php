<?php

namespace App\Models;

use App\Models\Pemesanan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kamar extends Model
{
    use HasFactory;
    protected $table = "kamars";
    protected $fillable = [
        'tipe_kamar',
        'nomor_kamar',
        'jumlah_kamar',
        'fasilitas_kamar',
        'foto_kamar',
        'harga_kamar',
        // 'kamar_id',
    ];

    protected $primaryKey = "id";

    public function pemesanan()
    {
        return $this->hasMany(Pemesanan::class);
    }
}
