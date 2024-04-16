<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Jadwal_kuliah;
use App\Models\Kelas_mahasiswa;

class JadwalKuliah extends Controller
{
    public function tampilPageJadwal(Request $request)
    {
        $dataKelas = DB::table('kelas_mahasiswa')->get();
        return view('admin/coba_jadwal', ['dataKelas' => $dataKelas]);
    }

    public function tampilJadwalKuliahKelas(Request $request, $kodeKelas)
    {
        $dataJadwalKuliahKelas = Jadwal_kuliah::where('kode_kelas', $kodeKelas)->get();
        // $dataJadwalKuliahKelasHari = Jadwal_kuliah::where('kode_kelas', $kodeKelas)->get();
        return view('admin/coba_jadwal_kelas', ['dataJadwalKuliahKelas' => $dataJadwalKuliahKelas, $kodeKelas]);
    }
}
