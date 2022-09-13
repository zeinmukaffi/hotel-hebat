<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('dashboards.users.index');
    }

    public function book(){
        return view('dashboards.users.book');
    }

    public function userKamar(){
        return view('dashboards.users.kamar');
    }

    public function userFasilitas(){
        return view('dashboards.users.fasilitas');
    }
}
