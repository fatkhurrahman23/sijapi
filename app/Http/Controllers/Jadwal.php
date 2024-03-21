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

    public function tambahDataRuang(Request $request){
        DB::table('ruang')->insert([
            'kode_ruang' => $request->kode_ruang,
            'nama' => $request->nama
        ]);
        return redirect('admin/ruang');
    }
}
