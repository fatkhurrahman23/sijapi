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


    // ============================= ENROLLMENT =============================
    public function tampilDataEnrollment(Request $request){
        $dataEnrollment = DB::table('enrollment')->get();
        return view('components/enrollment-component', ['dataEnrollment' => $dataEnrollment]);
    }

    public function tambahDataEnrollment(Request $request){
        DB::table('enrollment')->insert([
            'kode_enrollment' => $request->kode_enrollment,
            'kode_kelas' => $request->kode_kelas,
            'kode_dosen' => $request->kode_dosen,
            'kode_tahun_akademik' => $request->kode_tahun_akademik,
            'kode_mata_kuliah' => $request->kode_mata_kuliah
        ]);
        return redirect('admin/enrollment');
    }

    public function editEnrollment($kode_enrollment){
        $enrollmentToEdit = DB::table('enrollment')->where('kode_enrollment', $kode_enrollment)->first();
        return view('admin/edit_enrollment', ['enrollmentToEdit' => $enrollmentToEdit]);
    }

    public function updateDataEnrollment(Request $request){
        DB::table('enrollment')->where('kode_enrollment', $request->kode_enrollment)->update([
            'kode_kelas' => $request->kode_kelas,
            'kode_dosen' => $request->kode_dosen,
            'kode_tahun_akademik' => $request->kode_tahun_akademik,
            'kode_mata_kuliah' => $request->kode_mata_kuliah
        ]);
        return redirect('admin');
    }

    public function hapusDataEnrollment($kode_enrollment){
        DB::table('enrollment')->where('kode_enrollment', $kode_enrollment)->delete();
        return redirect('admin/enrollment');
    }



    // ============================= JAM KULIAH =============================
    public function tampilDataJamKuliah(Request $request){
        $dataJamKuliah = DB::table('jam')->get();
        return view('components/jam-component', ['dataJamKuliah' => $dataJamKuliah]);
    }

    public function tambahDataJamKuliah(Request $request){
        DB::table('jam')->insert([
            'kode_jam' => $request->kode_jam,
            'range_jam' => $request->range_jam
        ]);
        return redirect('admin/jam');
    }

    public function editJamKuliah($kode_jam){
        $jamKuliahToEdit = DB::table('jam')->where('kode_jam', $kode_jam)->first();
        return view('admin/edit_jam', ['jamKuliahToEdit' => $jamKuliahToEdit]);
    }

    public function updateDataJamKuliah(Request $request){
        DB::table('jam')->where('kode_jam', $request->kode_jam)->update([
            'range_jam' => $request->range_jam
        ]);
        return redirect('admin/jam');
    }

    public function hapusDataJamKuliah($kode_jam){
        DB::table('jam')->where('kode_jam', $kode_jam)->delete();
        return redirect('admin/jam');
    }



}
