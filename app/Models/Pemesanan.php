<?php

namespace App\Models;

use App\Models\Kamar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pemesanan extends Model
{
    use HasFactory;
    protected $table = "pemesanans";
    protected $fillable = [
        'nama',
        'alamat',
        'email',
        'no_telp',
        'nomor_kamar_id',
        'jumlah_kamar_pesan',
        'tanggal_checkin',
        'tanggal_checkout',
        'harga',
    ];

    public function kamar()
    {
        return $this->belongsTo(Kamar::class, 'nomor_kamar_id');
    }
}
