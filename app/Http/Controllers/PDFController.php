<?php

namespace App\Http\Controllers;

//use Barryvdh\DomPDF\PDF;
use App\Models\Jadwal_kuliah;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function index($kodeKelas)
    {
        // Ambil data dari sesi
        $jadwalKuliah = session('jadwalKuliah');
//        $kodeKelas = session('kodeKelas');
        $dataKelasMahasiswa = session('dataKelasMahasiswa');
        $dataEnrollment = session('dataEnrollment');
        $dataHari = session('dataHari');
        $dataRuang = session('dataRuang');
        $dataJam = session('dataJam');
        $dataTahunAkademik = session('dataTahunAkademik');

//        dd($kodeKelas);

        $days = [
            '1' => 'Senin',
            '2' => 'Selasa',
            '3' => 'Rabu',
            '4' => 'Kamis',
            '5' => 'Jumat'
        ];

        $jadwalKuliah = [];
        foreach ($days as $kode_hari => $datahari) {
            $jadwalKuliah[$kode_hari] = Jadwal_kuliah::where('kode_kelas', $kodeKelas)
                ->where('kode_hari', $kode_hari)
                ->orderBy('kode_jam_awal', 'asc')
                ->get();
        }


        session([
            'jadwalKuliah' => $jadwalKuliah,
        ]);


        $jadwalKuliahSenin = $jadwalKuliah[1];
        $jadwalKuliahSelasa = $jadwalKuliah[2];
        $jadwalKuliahRabu = $jadwalKuliah[3];
        $jadwalKuliahKamis = $jadwalKuliah[4];
        $jadwalKuliahJumat = $jadwalKuliah[5];

//        dd($jadwalKuliahSenin);

        return view("admin.tampilan-jadwal",
        [
            'jadwalKuliah' => $jadwalKuliah,
            'kodeKelas' => $kodeKelas,
            'dataKelasMahasiswa' => $dataKelasMahasiswa,
            'dataEnrollment' => $dataEnrollment,
            'dataHari' => $dataHari,
            'dataRuang' => $dataRuang,
            'dataJam' => $dataJam,
            'dataTahunAkademik' => $dataTahunAkademik,

            'jadwalKuliahSenin' => $jadwalKuliahSenin,
            'jadwalKuliahSelasa' => $jadwalKuliahSelasa,
            'jadwalKuliahRabu' => $jadwalKuliahRabu,
            'jadwalKuliahKamis' => $jadwalKuliahKamis,
            'jadwalKuliahJumat' => $jadwalKuliahJumat,
        ]);
    }
    public function generatePDF()
    {
        $data = ['title' => 'Welcome to HDTuto.com'];
        $pdf = PDF::loadView('admin.tampilan-jadwal', $data);
        return $pdf->download('jadwal.pdf');
    }
}
