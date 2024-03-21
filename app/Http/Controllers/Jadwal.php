<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Add this line

class Jadwal extends Controller
{
    public function tampilDataRuang(Request $request){
        $data = DB::table('ruang')->get();
        return view('admin/ruang', ['data' => $data]);
    }
}
