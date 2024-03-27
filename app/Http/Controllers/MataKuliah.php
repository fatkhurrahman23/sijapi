<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MataKuliah extends Controller
{
    //ambil data di database
    public function tampilDataMahasiswa(Request $request){
        $dataMahasiswa = DB::table('mahasiswa')->get();
        return view('admin/mahasiswa', ['dataMahasiswa' => $dataMahasiswa]);
    }

    //tambah data ke database
    public function tambahDataMahasiswa(Request $request){
        DB::table('mahasiswa')->insert([
            'kode_mata_kuliah' => $request->kode_mata_kuliah,
            'kode_kelas' => $request->kode_kelas,
            'nama' => $request->nama,
            'sks' => $request->sks,
            'semester' => $request->semester,
            'jenis' => $request->jenis
        ]);
        return redirect('admin/mahasiswa');
    }
}
