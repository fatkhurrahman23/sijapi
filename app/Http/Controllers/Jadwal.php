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


}
