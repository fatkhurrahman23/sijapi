<?php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Ruang;
use App\Models\Jam;
use App\Models\Tahun_akademik;
use App\Models\Kelas_mahasiswa;
use App\Models\Jadwal_kuliah;
use App\Models\Mata_kuliah;
use App\Models\Hari;
use App\Models\Enrollment;
use App\Models\Dosen;
class Jadwal extends Controller
{


    // =================================== DASHBOARD ===================================
    public function tampilDataDashboard(Request $request){
        return view('admin/dashboard');
    }


    // ===================================RUANG===================================
    public function tampilDataRuang(Request $request){
        $dataRuang = DB::table('ruang')->get();
        return view('admin/ruang', compact('dataRuang'));
    }

    public function tambahDataRuang(Request $request){
        $dataRuang = new Ruang();
        $dataRuang->kode_ruang = $request->kode_ruang;
        $dataRuang->nama_ruang = $request->nama_ruang;
        $dataRuang->save();
        return redirect('admin/ruang')->with('add', 'Ruang telah ditambahkan');
    }

    public function editRuang($kode_ruang){
        $dataRuang = DB::table('ruang')->where('kode_ruang', $kode_ruang)->first();
        return view('admin/ruang', compact('dataRuang'));
    }

    public function updateDataRuang(Request $request,  $id){
        $dataRuang = Ruang::where('kode_ruang', $id)->first();
        $dataRuang->kode_ruang = $request->kode_ruang;
        $dataRuang->nama_ruang = $request->nama_ruang;
        $dataRuang->save();
        return redirect('admin/ruang')->with('update', 'Ruang telah diupdate');
    }

    public function hapusDataRuang($kode_ruang){
        try {
            DB::table('ruang')->where('kode_ruang', $kode_ruang)->delete();
            return redirect('admin/ruang')->with('delete', 'Ruang telah dihapus');
        } catch (QueryException $e) {
            if ($e->errorInfo[1] === 1451) {
                // Foreign key constraint violation
                return redirect('admin/ruang')->with('error', 'Data still has related data, cannot be deleted');
            } else {
                // Other database error
                return redirect('admin/ruang')->with('error', 'An error occurred while deleting data');
            }
        }
    }


    // ============================= HARI =============================
    public function tampilDataHari(Request $request){
        $dataHari = DB::table('hari')->get();
        return view('admin/hari', compact('dataHari'));
    }

    public function tambahDataHari(Request $request){
        $dataHari = new Hari();
        $dataHari->kode_hari = $request->kode_hari;
        $dataHari->nama_hari = $request->nama_hari;
        $dataHari->save();
        return redirect('admin/hari')->with('add', 'Hari telah ditambahkan');
    }


    public function editHari($kode_hari){
        $dataHari = DB::table('hari')->where('kode_hari', $kode_hari)->first();
        return view('admin/hari', compact('dataHari'));
    }

    public function updateDataHari(Request $request){
        DB::table('hari')->where('kode_hari', $request->kode_hari)->update([
            'nama_hari' => $request->nama_hari
        ]);
        return redirect('admin/hari')->with('update', 'Hari telah diupdate');
    }

    public function hapusDataHari($kode_hari){
        DB::table('hari')->where('kode_hari', $kode_hari)->delete();
        return redirect('admin/hari')->with('delete', 'Hari telah dihapus');
    }


    // ============================= TAHUN AKADEMIK =============================
    public function tampilDataTahunAkademik()
    {
        $data = Tahun_akademik::all();
        return view('\admin\tahun_akademik', compact('data'));
    }

    public function tambahDataTahunAkademik(Request $request)
    {
        $data = new Tahun_akademik();
        $data->tahun_akademik = $request->tahun_akademik;
        $data->status = $request->status;
        $data->save();
        return Redirect('/admin/tahun_akademik')->with('add', 'Tahun telah ditambahkan');
    }

    public function editTahunAkademik(Request $request, $id)
    {
        $data = Tahun_akademik::where('id', $id)->first();
        return view('/admin/tahun_akademik', compact('data'));
    }

    public function updateDataTahunAkademik(Request $request, $id)
    {
        $data = Tahun_akademik::where('id', $id)->first();
        $data->tahun_akademik = $request->tahun_akademik;
        $data->status = $request->status;
        $data->save();
        return Redirect('/admin/tahun_akademik')->with('update', 'Tahun telah diupdate');
    }

    public function hapusDataTahunAkademik(Request $request, $id)
    {
        DB::table('tahun_akademik')->where('id', $id)->delete();
        return Redirect('/admin/tahun_akademik')->with('delete', 'Tahun akademik telah dihapus');
    }


    // ============================= ENROLLMENT =============================
    public function tampilDataEnrollment(Request $request){
        $dataMatkul = Mata_kuliah::all();
        $dataTahun = Tahun_akademik::all();
        $dataDosen = Dosen::all();
        $dataEnrollment = DB::table('enrollment')->get();
        return view('admin/enrollment', compact('dataEnrollment', 'dataDosen', 'dataTahun', 'dataMatkul'));
    }

    public function tambahDataEnrollment(Request $request){
        $dataMatkul = Mata_kuliah::all();
        $dataTahun = Tahun_akademik::all();
        $dataDosen = Dosen::all();
        $dataEnrollment = new Enrollment();
        $dataEnrollment->kode_enrollment = $request->kode_enrollment;
        $dataEnrollment->kode_dosen = $request->kode_dosen;
        $dataEnrollment->kode_mata_kuliah = $request->kode_mata_kuliah;
        $dataEnrollment->save();
        return redirect('admin/enrollment')->with('add', 'Enrollment telah ditambahkan');;
    }


    public function editEnrollment($kode_enrollment){
        $dataMatkul = Mata_kuliah::all();
        $dataTahun = Tahun_akademik::all();
        $dataDosen = Dosen::all();
        $dataEnrollment = DB::table('enrollment')->where('kode_enrollment', $kode_enrollment)->first();
        return view('admin/enrollment', compact('dataEnrollment', 'dataDosen','dataTahun', 'dataMatkul'));
    }

    public function updateDataEnrollment(Request $request){
        $dataMatkul = Mata_kuliah::all();
        $dataDosen = Dosen::all();
        $dataTahun = Tahun_akademik::all();
        DB::table('enrollment')->where('kode_enrollment', $request->kode_enrollment)->update([
            'kode_dosen' => $request->kode_dosen,
            'kode_mata_kuliah' => $request->kode_mata_kuliah
        ]);
        return redirect('admin/enrollment')->with('update', 'Enrollment telah diupdate');;
    }

    public function hapusDataEnrollment($kode_enrollment){
        $dataMatkul = Mata_kuliah::all();
        $dataTahun = Tahun_akademik::all();
        $dataDosen = Dosen::all();
        DB::table('enrollment')->where('kode_enrollment', $kode_enrollment)->delete();
        return redirect('admin/enrollment')->with('delete', 'Enrollment telah dihapus');;
    }


       // ============================= JADWAL KULIAH =============================
       public function tampilJadwalKuliah(){
        $dataJadwalKuliah = Jadwal_kuliah::all();
        $dataKelasMahasiswa = Kelas_mahasiswa::all();
        return view('\admin\jadwal_kuliah', compact('dataJadwalKuliah', 'dataKelasMahasiswa'))->with('message', 'Jadwal kuliah Telah Ditambahkan');
    }


    public function tambahJadwalKuliah(Request $request){
        $dataKelasMahasiswa = Kelas_mahasiswa::all();
        $dataEnrollment =  Enrollment::all();
        $dataHari = Hari::all();
        $dataRuang = Ruang::all();
        $dataJam = Jam::all();
        $dataJadwalKuliah = new Jadwal_kuliah();
        $dataJadwalKuliah->kode_jadwal_kuliah = $request->kode_jadwal_kuliah;
        $dataJadwalKuliah->kode_ = $request->kode_jadwal_kuliah;
        $dataJadwalKuliah->kode_enrollment = $request->kode_enrollment;
        $dataJadwalKuliah->kode_hari = $request->kode_hari;
        $dataJadwalKuliah->kode_ruang = $request->kode_ruang;
        $dataJadwalKuliah->kode_kelas = $request->kode_kelas;
        $dataJadwalKuliah->kode_jam_awal = $request->kode_jam_awal;
        $dataJadwalKuliah->kode_jam_akhir = $request->kode_jam_akhir;
        $dataJadwalKuliah->save();

        return Redirect('admin/jadwal_kuliah/$kode_kelas')->with('add', 'Jadwal Kuliah telah ditambahkan');
    }

    public function hapusDataJadwalKuliah(Request $request, $id)
    {
        $data = Jadwal_kuliah::where('kode_jadwal_kuliah',$id)->first();
        $data->delete();
        return Redirect('/admin/jadwal_kuliah')->with('delete', 'Jadwal kuliah telah dihapus');
    }

    public function tampilJadwalKuliahKelas(Request $request, $kodeKelas)
    {
        // $dataJadwalKuliah = new Jadwal_kuliah();
        $dataKelasMahasiswa = Kelas_mahasiswa::all();
        $dataKelasMahasiswa = Kelas_mahasiswa::all();
        $dataEnrollment =  Enrollment::all();
        $dataHari = Hari::all();
        $dataRuang = Ruang::all();
        $dataJam = Jam::all();
//        DB::enableQueryLog();
        $jadwalKuliahSenin = Jadwal_kuliah::where('kode_kelas', $kodeKelas)->where('kode_hari', '1')->orderBy('kode_jam_awal', 'asc')->get();
//        dd(DB::getQueryLog(), $jadwalKuliahSenin->first()->toArray()); // Show results of log
//        dd($jadwalKuliahSenin->first()->enrollment->mata_kuliah->toArray(), \DB::getQueryLog()); // Show results of log
//        dd($jadwalKuliahSenin->first()->ruang->toArray(), \DB::getQueryLog()); // Show results of log
        $jadwalKuliahSelasa = Jadwal_kuliah::where('kode_kelas', $kodeKelas)->where('kode_hari', '2')->orderBy('kode_jam_awal', 'asc')->get();
        $jadwalKuliahRabu = Jadwal_kuliah::where('kode_kelas', $kodeKelas)->where('kode_hari', '3')->orderBy('kode_jam_awal', 'asc')->get();
        $jadwalKuliahKamis = Jadwal_kuliah::where('kode_kelas', $kodeKelas)->where('kode_hari', '4')->orderBy('kode_jam_awal', 'asc')->get();
        $jadwalKuliahJumat = Jadwal_kuliah::where('kode_kelas', $kodeKelas)->where('kode_hari', '5')->orderBy('kode_jam_awal', 'asc')->get();


        return view('admin/coba_jadwal_kelas', [
            'jadwalKuliahSenin' => $jadwalKuliahSenin,
            'jadwalKuliahSelasa' => $jadwalKuliahSelasa,
            'jadwalKuliahRabu' => $jadwalKuliahRabu,
            'jadwalKuliahKamis' => $jadwalKuliahKamis,
            'jadwalKuliahJumat' => $jadwalKuliahJumat,

            'kodeKelas' => $kodeKelas // Pass $kodeKelas to the view

        ], compact( 'jadwalKuliahSenin','jadwalKuliahRabu', 'jadwalKuliahKamis', 'jadwalKuliahJumat' ,'jadwalKuliahSelasa','dataKelasMahasiswa','dataEnrollment', 'dataHari', 'dataRuang', 'dataJam'));
    }

    public function updateTingkatMahasiswa()
    {
        // Mendapatkan tahun akademik aktif
        $tahunAktif = Tahun_akademik::where('status', 'aktif')->first();
        if (!$tahunAktif) {
            return "Tidak ada tahun akademik yang aktif.";
        }

        // Mendapatkan semua tahun akademik dan membuat array index
        $semuaTahun = Tahun_akademik::orderBy('tahun_akademik', 'asc')->pluck('tahun_akademik')->toArray();
        if (!in_array($tahunAktif->tahun_akademik, $semuaTahun)) {
            return "Tahun akademik aktif tidak ditemukan dalam daftar semua tahun akademik.";
        }

        // Mendapatkan index tahun akademik aktif
        $indexTahunAktif = array_search($tahunAktif->tahun_akademik, $semuaTahun);

        // Mengupdate tingkat mahasiswa
        DB::table('mahasiswa')->where('status', 'aktif')->orderBy('tahun_masuk', 'asc')->chunk(200, function ($mahasiswas) use ($semuaTahun, $indexTahunAktif) {
            foreach ($mahasiswas as $mahasiswa) {
                if (in_array($mahasiswa->tahun_masuk, $semuaTahun)) {
                    $indexTahunMasuk = array_search($mahasiswa->tahun_masuk, $semuaTahun);
                    $tingkat = $indexTahunAktif - $indexTahunMasuk + 1;
                    DB::table('mahasiswa')
                        ->where('id', $mahasiswa->id)
                        ->update(['tingkat' => $tingkat]);
                }
            }
        });

        return "Tingkat mahasiswa telah diperbarui berdasarkan tahun akademik aktif.";
    }

    public function AktivasiTahunAkademik(Request $request)
    {
        Tahun_akademik::query()->update(['status' => 'tidak aktif']);

        // aktifkan tahun akademik yang dipilih
        $tahunAktif = Tahun_akademik::where('tahun_akademik', $request->tahun_akademik)->first();
        if ($tahunAktif) {
            $tahunAktif->status = 'aktif';
            $tahunAktif->save();

            // jalankan fungsi updateTingkatMahasiswa
            $this->updateTingkatMahasiswa();

            return redirect('/admin/tahun_akademik');
        } else {
            return "Tahun akademik $request->tahun_akademik tidak ditemukan.";
        }
    }


}
