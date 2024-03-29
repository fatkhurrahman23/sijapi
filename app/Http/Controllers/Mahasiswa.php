<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Mahasiswa extends Controller
{
    //ambil data di database
    public function tampilDataMahasiswa(Request $request){
        $dataMahasiswa = DB::table('mahasiswa')->get();
        return view('admin/mahasiswa', ['dataMahasiswa' => $dataMahasiswa]);
    }

    //tambah data ke database
    public function tambahDataMahasiswa(Request $request){
        DB::table('mahasiswa')->insert([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'kode_kelas' => $request->kode_kelas
        ]);
        return redirect('admin');
    }
    
    // edit data mahasiswa
    public function editMahasiswa($nim){
        $mahasiswaToEdit = DB::table('mahasiswa')->where('nim', $nim)->first();
        return view('admin/edit_mahasiswa', ['mahasiswaToEdit' => $mahasiswaToEdit]);
    }

    // update data mahasiswa
    public function updateDataMahasiswa(Request $request){
        DB::table('mahasiswa')->where('nim', $request->nim)->update([
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'kode_kelas' => $request->kode_kelas
        ]);
        return redirect('admin');
    }

    // hapus data mahasiswa
    public function hapusDataMahasiswa($nim){
        DB::table('mahasiswa')->where('nim', $nim)->delete();
        return redirect('admin/mahasiswa');
    }
}
