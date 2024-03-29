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

    // edit data dosen
    public function editDosen($nip){
        $dosenToEdit = DB::table('dosen')->where('nip', $nip)->first();
        return view('admin/edit_dosen', ['dosenToEdit' => $dosenToEdit]);
    }

    // update data dosen
    public function updateDataDosen(Request $request){
        DB::table('dosen')->where('kode_dosen', $request->kode_dosen)->update([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'kode_prodi' => $request->kode_prodi
        ]);
        return redirect('admin/dosen');
    }

    // hapus data dosen
    public function hapusDataDosen($kode_dosen){
        DB::table('dosen')->where('kode_dosen', $kode_dosen)->delete();
        return redirect('admin/dosen');
    }
}
