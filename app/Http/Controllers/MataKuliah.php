<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MataKuliah extends Controller
{
    //ambil data di database
    public function tampilMataKuliah(Request $request){
        $dataMahasiswa = DB::table('mahasiswa')->get();
        return view('admin/mahasiswa', ['dataMahasiswa' => $dataMahasiswa]);
    }

    //tambah data ke database
    public function tambahMataKuliah(Request $request){
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

    //edit data
    public function editMataKuliah($kode_mata_kuliah){
        $dataMahasiswa = DB::table('mahasiswa')->where('kode_mata_kuliah', $kode_mata_kuliah)->first();
        return view('admin/mahasiswa-edit', ['dataMahasiswa' => $dataMahasiswa]);
    }

    //update data
    public function updateDataMataKuliah(Request $request, $kode_mata_kuliah){
        DB::table('mahasiswa')->where('kode_mata_kuliah', $kode_mata_kuliah)->update([
            'kode_kelas' => $request->kode_kelas,
            'nama' => $request->nama,
            'sks' => $request->sks,
            'semester' => $request->semester,
            'jenis' => $request->jenis
        ]);
        return redirect('admin/mahasiswa');
    }

    //hapus data
    public function hapusDataMataKuliah($kode_mata_kuliah){
        DB::table('mahasiswa')->where('kode_mata_kuliah', $kode_mata_kuliah)->delete();
        return redirect('admin/mahasiswa');
    }
    
}
