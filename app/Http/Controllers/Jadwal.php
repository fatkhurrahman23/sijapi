<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Ruang;
use App\Models\Jam;
use App\Models\Tahun_akademik;
use App\Models\Kelas_mahasiswa;
use App\Models\Jadwal_kuliah;
use App\Models\Jurusan;
use App\Models\Mata_kuliah;
use App\Models\Hari;
use App\Models\Data_prodi;
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

        try {
            $dataRuang = Ruang::where('kode_ruang', $id)->first();
            $dataRuang->kode_ruang = $request->kode_ruang;
            $dataRuang->nama_ruang = $request->nama_ruang;
            $dataRuang->save();
            return redirect('admin/ruang')->with('update', 'Ruang telah diupdate');
        } catch (QueryException $e) {
            if ($e->errorInfo[1] === 1451) {
                // Foreign key constraint violation
                return redirect('admin/ruang')->with('error', 'Data still has related data, cannot be update');
            } else {
                // Other database error
                return redirect('admin/ruang')->with('error', 'An error occurred while update data');
            }
        }
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

        try {
            DB::table('hari')->where('kode_hari', $request->kode_hari)->update([
                'nama_hari' => $request->nama_hari
            ]);
            return redirect('admin/hari')->with('update', 'Hari telah diupdate');
        } catch (QueryException $e) {
            if ($e->errorInfo[1] === 1451) {
                // Foreign key constraint violation
                return redirect('admin/hari')->with('error', 'Data still has related data, cannot be update');
            } else {
                // Other database error
                return redirect('admin/hari')->with('error', 'An error occurred while update data');
            }
        }
    }

    public function hapusDataHari($kode_hari){
        try {
            DB::table('hari')->where('kode_hari', $kode_hari)->delete();
            return redirect('admin/hari')->with('delete', 'Hari telah dihapus');
        } catch (QueryException $e) {
            if ($e->errorInfo[1] === 1451) {
                // Foreign key constraint violation
                return redirect('admin/hari')->with('error', 'Data still has related data, cannot be deleted');
            } else {
                // Other database error
                return redirect('admin/hari')->with('error', 'An error occurred while deleting data');
            }
        }
    }


    // ============================= TAHUN AKADEMIK =============================
    public function tampilDataTahunAkademik()
    {
        $data = Tahun_akademik::all();
        $tahunAktif = Tahun_akademik::where('status', 'Aktif')->first();

        $semesterAktif = $tahunAktif ? $tahunAktif->semester : null;
        $tahunAktif = $tahunAktif->tahun_akademik ?? null;

        if (!$tahunAktif) {
            return view('\admin\tahun_akademik', ['data' => $data, 'tahunAktif' => '(Tidak ada tahun akademik yang aktif.)', 'semesterAktif' => 'semesterAktif']);
        }

        return view('\admin\tahun_akademik', compact('data', 'tahunAktif', 'semesterAktif'));
    }

    public function tambahDataTahunAkademik(Request $request)
    {

        if ($request->tgl_mulai > $request->tgl_selesai) {
            return Redirect('/admin/tahun_akademik')->with('error', 'Tanggal Mulai tidak boleh lebih besar dari Tanggal Selesai');
        }

        $data = new Tahun_akademik();
        $data->kode_tahun_akademik = $request->kode_tahun_akademik;
        $data->tahun_akademik = $request->tahun_akademik;
        $data->tgl_mulai = $request->tgl_mulai;
        $data->tgl_selesai = $request->tgl_selesai;
        $data->semester = $request->semester;
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
        try {
            $data = Tahun_akademik::where('id', $id)->first();
            $data->kode_tahun_akademik = $request->kode_tahun_akademik;
            $data->tahun_akademik = $request->tahun_akademik;
            $data->tgl_mulai = $request->tgl_mulai;
            $data->tgl_selesai = $request->tgl_selesai;
            $data->semester = $request->semester;
            $data->status = $request->status;
            $data->save();
            return Redirect('/admin/tahun_akademik')->with('update', 'Tahun telah diupdate');
        } catch (QueryException $e) {
            if ($e->errorInfo[1] === 1451) {
                // Foreign key constraint violation
                return redirect('admin/tahun_akademik')->with('error', 'Data still has related data, cannot be update');
            } else {
                // Other database error
                return redirect('admin/tahun_akademik')->with('error', 'An error occurred while update data');
            }
        }
    }

    public function hapusDataTahunAkademik(Request $request, $id)
    {
        try {
            DB::table('tahun_akademik')->where('id', $id)->delete();
            return Redirect('/admin/tahun_akademik')->with('delete', 'Tahun akademik telah dihapus');
        } catch (QueryException $e) {
            if ($e->errorInfo[1] === 1451) {
                // Foreign key constraint violation
                return redirect('admin/tahun_akademik')->with('error', 'Data still has related data, cannot be deleted');
            } else {
                // Other database error
                return redirect('admin/tahun_akademik')->with('error', 'An error occurred while deleting data');
            }
        }
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
        try {
            $dataMatkul = Mata_kuliah::all();
            $dataDosen = Dosen::all();
            $dataTahun = Tahun_akademik::all();
            DB::table('enrollment')->where('kode_enrollment', $request->kode_enrollment)->update([
                'kode_dosen' => $request->kode_dosen,
                'kode_mata_kuliah' => $request->kode_mata_kuliah
            ]);
            return redirect('admin/enrollment')->with('update', 'Enrollment telah diupdate');
        } catch (QueryException $e) {
            if ($e->errorInfo[1] === 1451) {
                // Foreign key constraint violation
                return redirect('admin/enrollment')->with('error', 'Data still has related data, cannot be update');
            } else {
                // Other database error
                return redirect('admin/enrollment')->with('error', 'An error occurred while update data');
            }
        }

    }

    public function hapusDataEnrollment($kode_enrollment){
        $dataMatkul = Mata_kuliah::all();
        $dataTahun = Tahun_akademik::all();
        $dataDosen = Dosen::all();
        try {
            DB::table('enrollment')->where('kode_enrollment', $kode_enrollment)->delete();
            return redirect('admin/enrollment')->with('delete', 'Enrollment telah dihapus');;
        } catch (QueryException $e) {
            if ($e->errorInfo[1] === 1451) {
                // Foreign key constraint violation
                return redirect('admin/enrollment')->with('error', 'Data still has related data, cannot be deleted');
            } else {
                // Other database error
                return redirect('admin/enrollment')->with('error', 'An error occurred while deleting data');
            }
        }


    }


       // ============================= JADWAL KULIAH =============================

       public function tampilJenisJurusan()
       {
           $dataJurusan = Jurusan::all();
           return view('admin/jenis_jurusan', compact('dataJurusan'));
       }

       public function tampilJenisProdi(Request $request)
       {
           $kode_jurusan = $request->input('kode_jurusan');
           $dataProdi = Data_prodi::where('kode_jurusan', $kode_jurusan)->get();

           return view('admin/jenis_prodi', compact('dataProdi'));
       }
       public function tampilJenisKelas($kode_prodi)
       {
           $dataKelas = Kelas_mahasiswa::where('kode_prodi', $kode_prodi)->get();
           return view('admin/jenis_kelas', compact('dataKelas'));
       }

    public function tampilJadwalKuliahKelas($kodeKelas)
    {
        $dataTahunAkademik = Tahun_akademik::all();
        $dataKelasMahasiswa = Kelas_mahasiswa::all();
        $dataEnrollment = Enrollment::all();
        $dataHari = Hari::all();
        $dataRuang = Ruang::all();
        $dataJam = Jam::all();

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

//        dd($jadwalKuliah->enrollment->kode_mata_kuliah);

        session([
            'kodeKelas' => $kodeKelas,
            'dataKelasMahasiswa' => $dataKelasMahasiswa,
            'dataEnrollment' => $dataEnrollment,
            'dataHari' => $dataHari,
            'dataRuang' => $dataRuang,
            'dataJam' => $dataJam,
            'jadwalKuliah' => $jadwalKuliah,
            'dataTahunAkademik' => $dataTahunAkademik,
        ]);

//        dd($kodeKelas);

//        dd($jadwalKuliah);

        return view('admin/jadwal_kelas', [
            'jadwalKuliah' => $jadwalKuliah,
            'kodeKelas' => $kodeKelas,
            'dataKelasMahasiswa' => $dataKelasMahasiswa,
            'dataEnrollment' => $dataEnrollment,
            'dataHari' => $dataHari,
            'dataRuang' => $dataRuang,
            'dataJam' => $dataJam,
            'dataTahunAkademik' => $dataTahunAkademik,
        ]);
    }
    public function tambahJadwalKuliah(Request $request){
        $dataKelasMahasiswa = Kelas_mahasiswa::all();
        $dataEnrollment =  Enrollment::all();
        $dataHari = Hari::all();
        $dataRuang = Ruang::all();
        $dataJam = Jam::all();
        $dataTahunAkademik = Tahun_akademik::all();
        $dataJadwalKuliah = new Jadwal_kuliah();
        $dataJadwalKuliah->kode_jadwal_kuliah = $request->kode_jadwal_kuliah;
        $dataJadwalKuliah->kode_enrollment = $request->kode_enrollment;
        $dataJadwalKuliah->kode_tahun_akademik = $request->kode_tahun_akademik;
        $dataJadwalKuliah->semester = $request->semester;
        $dataJadwalKuliah->kode_hari = $request->kode_hari;
        $dataJadwalKuliah->kode_ruang = $request->kode_ruang;
        $dataJadwalKuliah->kode_kelas = $request->kode_kelas;
        $dataJadwalKuliah->kode_jam_awal = $request->kode_jam_awal;
        $dataJadwalKuliah->kode_jam_akhir = $request->kode_jam_akhir;
        $dataJadwalKuliah->save();

        return redirect()->back()->with('add', 'Jadwal Kuliah telah ditambahkan');
    }

    public function editDataJadwalKuliah($kode_jadwal_kuliah)
    {
        $dataKelasMahasiswa = Kelas_mahasiswa::all();
        $dataEnrollment = Enrollment::all();
        $dataHari = Hari::all();
        $dataRuang = Ruang::all();
        $dataJam = Jam::all();
        $dataTahunAkademik = Tahun_akademik::all();

        $dataJadwalKuliah = JadwalKuliah::where('kode_jadwal_kuliah', $kode_jadwal_kuliah)->first();

        return view('admin.jadwal_kelas.edit', compact('dataKelasMahasiswa', 'dataEnrollment', 'dataHari', 'dataRuang', 'dataJam', 'dataTahunAkademik', 'dataJadwalKuliah'));
    }

    public function updateDataJadwalKuliah(Request $request)
    {
        try {
            $jadwalKuliah = Jadwal_Kuliah::where('kode_jadwal_kuliah', $request->kode_jadwal_kuliah)->first();
            $jadwalKuliah->kode_tahun_akademik = $request->kode_tahun_akademik;
            $jadwalKuliah->kode_enrollment = $request->kode_enrollment;
            $jadwalKuliah->kode_hari = $request->kode_hari;
            $jadwalKuliah->kode_ruang = $request->kode_ruang;
            $jadwalKuliah->kode_kelas = $request->kode_kelas;
            $jadwalKuliah->semester = $request->semester;
            $jadwalKuliah->kode_jam_awal = $request->kode_jam_awal;
            $jadwalKuliah->kode_jam_akhir = $request->kode_jam_akhir;
            $jadwalKuliah->save();

            return redirect()->back()->with('update', 'Jadwal telah diupdate');
        } catch (\Exception $e) {
//    dd($e->getMessage());
    return redirect()->back()->with('error', 'An error occurred while updating data');
}
    }


    public function hapusDataJadwalKuliah(Request $request, $id)
    {

        try {
            $data = Jadwal_kuliah::where('kode_jadwal_kuliah',$id)->first();
            $data->delete();
            return redirect()->back()->with('delete', 'Jadwal kuliah telah dihapus');
        } catch (QueryException $e) {
            if ($e->errorInfo[1] === 1451) {
                // Foreign key constraint violation
                return redirect()->back()->with('error', 'Data still has related data, cannot be deleted');
            } else {
                // Other database error
                return redirect()->back()->with('error', 'An error occurred while deleting data');
            }
        }
    }



    public function updateTingkatMahasiswa()
    {
        // Mendapatkan tahun akademik aktif
        $tahunAktif = Tahun_akademik::where('status', 'Aktif')->first();
        if (!$tahunAktif) {
            return with("error", "Tidak ada tahun akademik yang aktif.");
        }

        // Mendapatkan semua tahun akademik dan membuat array index
        $semuaTahun = Tahun_akademik::orderBy('kode_tahun_akademik', 'asc')->pluck('kode_tahun_akademik')->toArray();

        if (!in_array($tahunAktif->kode_tahun_akademik, $semuaTahun)) {
            return with("error", "Tahun akademik aktif tidak ditemukan dalam daftar semua tahun akademik.");
        }

        // Mengupdate tingkat mahasiswa
        DB::enableQueryLog();
        DB::table('mahasiswa')
            ->where('status', 'Aktif')
            ->orderBy('tahun_masuk', 'asc')
            ->chunk(200, function ($mahasiswas) use ($semuaTahun) {
            foreach ($mahasiswas as $mahasiswa) {
//                    dd($semuaTahun, $mahasiswas);
                if (in_array($mahasiswa->tahun_masuk, $semuaTahun)) {
                    $tahun_masuk = explode('-', $mahasiswa->tahun_masuk);
                    $tahun_masuk = $tahun_masuk[0];

                    $result = array_map(function($item) {
                        $parts = explode("-", $item);
                        return $parts[0];
                    }, $semuaTahun);

                    $semuaTahun = array_unique($result);
                    $semuaTahun = array_values($semuaTahun);

                    // Mendapatkan index tahun_masuk dan tahun_akademik aktif dalam array semuaTahun
                    $tahunAkademikAktif = Tahun_akademik::where('status', 'Aktif')->first();
                    $tahunAkademikAktif = $tahunAkademikAktif->tahun_akademik;
                    $tahunAktif = explode('-', $tahunAkademikAktif);
                    $tahunAktif = $tahunAktif[0];

                    $indexTahunMasuk = array_search($tahun_masuk, $semuaTahun);
                    $indexTahunAktif = array_search($tahunAktif, $semuaTahun);

                    $tingkat = ($indexTahunAktif - $indexTahunMasuk) + 1;
//                    dd($tahun_masuk, $indexTahunMasuk, $tingkat);
                    DB::table('mahasiswa')
                        ->where('id', $mahasiswa->id)
                        ->update(['tingkat' => $tingkat]);
                }
                else {
                    return "halo";
                }
            }
//            dd(DB::getQueryLog());
        });

//        return "Tingkat mahasiswa telah diperbarui berdasarkan tahun akademik aktif.";
    }

    public function AktivasiTahunAkademik(Request $request)
    {
        Tahun_akademik::query()->update(['status' => 'Tidak Aktif']);

        // aktifkan tahun akademik yang dipilih
        $tahunAktif = Tahun_akademik::where('tahun_akademik', $request->tahun_akademik)->first();
//        dd($tahunAktif);
        if ($tahunAktif) {
            $tahunAktif->status = 'Aktif';
            $tahunAktif->save();

            // jalankan fungsi updateTingkatMahasiswa
            $this->updateTingkatMahasiswa();

            return redirect('/admin/tahun_akademik')->with('success', 'Tahun akademik ' . $request->tahun_akademik . ' telah diaktifkan.');
        } else {
            return "Tahun akademik $request->tahun_akademik tidak ditemukan.";
        }
    }


}
