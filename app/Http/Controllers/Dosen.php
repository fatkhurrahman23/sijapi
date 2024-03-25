<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Dosen extends Controller
{
    //ambil data di database
    public function tampilDataDosen(Request $request){
        $dataDosen = DB::table('dosen')->get();
        return view('admin/dosen', ['dataDosen' => $dataDosen]);
    }

    //tambah data ke database
    public function tambahDataDosen(Request $request){
        DB::table('dosen')->insert([
            'kode_dosen' => $request->kode_dosen,
            'nip' => $request->nip,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'kode_prodi' => $request->kode_prodi         
        ]);
        return redirect('admin/dosen');
    }
}
