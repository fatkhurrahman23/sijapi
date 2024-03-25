<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sijapi extends Controller
{
    public function index()
    {
        // Menggunakan view beranda untuk mahasiswa
        return view('mahasiswa\page\beranda');

        // Atau Anda juga bisa menggunakan view signin
        // return view('signin');
    }
}