<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Jadwal extends Controller
{
    public function tampilDataRuang(Request $request){
        $dataRuang = DB::table('ruang')->get();
        return view('components/ruang-component', ['dataRuang' => $dataRuang]);
    }

    public function tambahDataRuang(Request $request){
        DB::table('ruang')->insert([
            'kode_ruang' => $requset->kode_ruang,
            'nama' => $request->nama
        ]);
        return redirect('components/ruang-component');
    }

    public function editRuang($kode_ruang){
        $ruangToEdit = DB::table('ruang')->where('kode_ruang', $kode_ruang)->first();
        return view('admin/edit_ruang', ['ruangToEdit' => $ruangToEdit]);
    }

    public function updateDataRuang(Request $request){
        DB::table('ruang')->where('kode_ruang', $request->kode_ruang)->update([
            'nama' => $request->nama
        ]);
        return redirect('components/ruang-component');
    }

    public function hapusDataRuang($kode_ruang){
        DB::table('ruang')->where('kode_ruang', $kode_ruang)->delete();
        return redirect('components/ruang-component');
    }


    // ============================= HARI =============================
    public function tampilDataHari(Request $request){
        $dataHari = DB::table('hari')->get();
        return view('components/hari-component', ['dataHari' => $dataHari]);
    }

    public function tambahDataHari(Request $request){
        DB::table('hari')->insert([
            'kode_hari' => $requset->kode_hari,
            'nama_hari' => $request->nama_hari
        ]);
        return redirect('admin/hari');
    }

    public function editHari($kode_hari){
        $hariToEdit = DB::table('hari')->where('kode_hari', $kode_hari)->first();
        $nama_hari = DB::table('hari')->pluck('nama_hari');
        return view('admin/edit_hari', ['hariToEdit' => $hariToEdit, 'nama_hari' => $nama_hari]);
    }

    public function updateDataHari(Request $request){
        DB::table('hari')->where('kode_hari', $request->kode_hari)->update([
            'nama_hari' => $request->nama_hari
        ]);
        return redirect('admin/hari');
    }

    public function hapusDataHari($kode_hari){
        DB::table('hari')->where('kode_hari', $kode_hari)->delete();
        return redirect('admin/hari');
    }


}
