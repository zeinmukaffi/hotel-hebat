<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FasilitasHotel extends Model
{
    protected $table = "fasilitas_hotels";
    protected $primaryKey = "id";
    protected $fillable = ['nama_fasilitas_hotel', 'deskripsi', 'foto'];
    protected $date = ['created_at'];
}
