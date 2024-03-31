<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Dosen extends Controller
{
    //ambil data di database
    public function tampilDataDosen(Request $request){
        $dataDosen = DB::table('dosen')->get();
        return view('components/dosen-component', ['dataDosen' => $dataDosen]);
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
        return redirect('components/dosen-component');
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
        return redirect('components/dosen-component');
    }

    // hapus data dosen
    public function hapusDataDosen($kode_dosen){
        DB::table('dosen')->where('kode_dosen', $kode_dosen)->delete();
        return redirect('components/dosen-component');
    }


    // ======================= PRODI DOSEN =======================
    //ambil data di database
    public function tampilDataProdiDosen(Request $request){
        $dataProdiDosen = DB::table('prodi_dosen')->get();
        return view('components/prodi-dosen', ['dataProdiDosen' => $dataProdiDosen]);
    }

    //tambah data ke database
    public function tambahDataProdiDosen(Request $request){
        DB::table('prodi_dosen')->insert([
            'kode_prodi' => $request->kode_prodi,
            'nip' => $request->nama
        ]);
        return redirect('components/prodi-dosen');
    }

    // edit data prodi dosen
    public function editProdiDosen($kode_prodi){
        $prodiDosenToEdit = DB::table('prodi_dosen')->where('kode_prodi', $kode_prodi)->first();
        return view('admin/edit_prodi_dosen', ['prodiDosenToEdit' => $prodiDosenToEdit]);
    }

    // update data prodi dosen
    public function updateDataProdiDosen(Request $request){
        DB::table('prodi_dosen')->where('kode_prodi', $request->kode_prodi)->update([
            'nama' => $request->nama
        ]);
        return redirect('components/prodi-dosen');
    }
}
