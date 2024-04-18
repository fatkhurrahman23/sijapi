<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sijapi extends Controller
{
    public function index(){
        return view('/bukan_admin/beranda');
    }
}