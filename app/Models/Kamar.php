<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;
    protected $table = "kamars";
    protected $fillable = [
        'tipe_kamar',
        'jumlah_kamar',
        'fasilitas_kamar',
        'foto_kamar',
        'harga_kamar',
    ];
}
