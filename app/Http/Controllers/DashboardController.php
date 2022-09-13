<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function fasilitas()
    {
        return view('beforeLogin.fasilitas');
    }
    public function kamar()
    {
        return view('beforeLogin.kamar');
    }
}
