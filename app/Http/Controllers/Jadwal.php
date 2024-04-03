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
            'kode_ruang' => $request->kode_ruang,
            'nama' => $request->nama
        ]);
        $dataRuang = DB::table('ruang')->get();
        return view('components/ruang-component', ['dataRuang' => $dataRuang]);
    }

    public function editRuang($kode_ruang){
        $ruangToEdit = DB::table('ruang')->where('kode_ruang', $kode_ruang)->first();
        return view('admin/edit_ruang', ['ruangToEdit' => $ruangToEdit]);
    }

    public function updateDataRuang(Request $request){
        DB::table('ruang')->where('kode_ruang', $request->kode_ruang)->update([
            'nama' => $request->nama
        ]);
        return redirect('admin/ruang');
    }

    public function hapusDataRuang($kode_ruang){
        DB::table('ruang')->where('kode_ruang', $kode_ruang)->delete();
        return redirect('admin/ruang');
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
        return view('admin/edit_hari', ['hariToEdit' => $hariToEdit]);
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


    // ============================= TAHUN AKADEMIK =============================
    public function tampilDataTahunAkademik(Request $request){
        $dataTahunAkademik = DB::table('tahun_akademik')->get();
        return view('components/tahun-akademik', ['dataTahunAkademik' => $dataTahunAkademik]);
    }

    public function tambahDataTahunAkademik(Request $request){
        DB::table('tahun_akademik')->insert([
            'kode_tahun_akademik' => $requset->kode_tahun_akademik,
            'tahun_akademik' => $request->tahun_akademik,
            'status' => $request->status,
        ]);
        return redirect('admin/tahun_akademik');
    }

    public function editTahunAkademik($kode_tahun_akademik){
        $tahunAkademikToEdit = DB::table('tahun_akademik')->where('kode_tahun_akademik', $kode_tahun_akademik)->first();
        return view('admin/edit_tahun_akademik', ['tahunAkademikToEdit' => $tahunAkademikToEdit]);
    }

    public function updateDataTahunAkademik(Request $request){
        DB::table('tahun_akademik')->where('kode_tahun_akademik', $request->kode_tahun_akademik)->update([
            'tahun_akademik' => $request->tahun_akademik
        ]);
        return redirect('admin/tahun_akademik');
    }

    public function hapusDataTahunAkademik($kode_tahun_akademik){
        DB::table('tahun_akademik')->where('kode_tahun_akademik', $kode_tahun_akademik)->delete();
        return redirect('admin/tahun_akademik');
    }




}
