<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sijapi extends Controller
{
    public function index(){
        return view('/mahasiswa/page/beranda');
    }
}