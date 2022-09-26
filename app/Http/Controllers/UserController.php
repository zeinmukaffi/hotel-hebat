<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\Pemesanan;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('dashboards.users.index');

    }

    public function book(){
        return view('dashboards.users.book', compact('datapemesanan','kamar'));
    }

    public function userKamar(){
        return view('dashboards.users.kamar');
    }

    public function userFasilitas(){
        return view('dashboards.users.fasilitas');
    }

    public function usertable(){
        $datapemesanan = Pemesanan::latest()->paginate(1);
        $kamar = Kamar::latest()->with('datapemesanan');
        return view('dashboards.users.table' , compact('datapemesanan','kamar'));
    }
    
    public function adminPemesanan(){
        $datapemesanan = Pemesanan::paginate();
        $kamar = Kamar::latest()->with('datapemesanan');
        return view('dashboards.admins.pemesanan.index', compact('datapemesanan','kamar'));
    }

   
}
