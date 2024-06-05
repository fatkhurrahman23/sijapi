<?php

namespace App\Http\Controllers;
use App\Models\Data_prodi;
use App\Models\Dosen;
use App\Models\Jurusan;
use App\Models\Ruang;
use App\Models\Jam;
use App\Models\Tahun_akademik;
use App\Models\Kelas_mahasiswa;
use App\Models\Jadwal_kuliah;
use App\Models\Mata_kuliah;
use App\Models\Hari;
use App\Models\Enrollment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

class DosenController extends Controller
{
    //ambil data di database
    public function tampilDataDosen(Request $request){
        $dataDosen = Dosen::all();
        $dataProdi = Data_prodi::all();
//        dd($dataProdi->toArray());
        return view('admin/dosen', compact('dataDosen', 'dataProdi'));
    }

    //tambah data ke database
    public function tambahDataDosen(Request $request){
        $dataDosen = new Dosen();
        $dataProdi = Data_prodi::all();
        $dataDosen->kode_dosen = $request->kode_dosen;
        $dataDosen->nip = $request->nip;
        $dataDosen->nama = $request->nama;
        $dataDosen->alamat = $request->alamat;
        $dataDosen->no_telp = $request->no_telp;
        $dataDosen->kode_prodi = $request->kode_prodi;

        $dataDosen->save();
        return redirect('/admin/dosen')->with('add', 'Dosen telah ditambahkan');
    }


    // edit data dosen
    public function editDosen($kode_dosen){
        $dataDosen = DB::table('dosen')->where('kode_dosen', $kode_dosen)->first();
        $dataProdi = Data_prodi::all();
        dd($dataProdi->toArray());
        return view('admin/dosen', compact('dataDosen', 'dataProdi'));
    }

    // update data dosen
    public function updateDataDosen(Request $request){


        try {
            $dataProdi = Data_prodi::all();
            DB::table('dosen')->where('kode_dosen', $request->kode_dosen)->update([
                'nip' => $request->nip,
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'no_telp' => $request->no_telp,
                'kode_prodi' => $request->kode_prodi
            ]);
            return redirect('admin/dosen')->with('update', 'Dosen telah diupdate');
        } catch (QueryException $e) {
            if ($e->errorInfo[1] === 1451) {
                // Foreign key constraint violation
                return redirect('admin/dosen')->with('error', 'Data still has related data, cannot be update');
            } else {
                // Other database error
                return redirect('admin/dosen')->with('error', 'An error occurred while update data');
            }
        }
    }


    // hapus data dosen
    public function hapusDataDosen($kode_dosen){

        try{
            DB::table('dosen')->where('kode_dosen', $kode_dosen)->delete();
            return redirect('admin/dosen')->with('delete', 'Dosen telah dihapus');
        }
        catch (QueryException $e) {
            if ($e->errorInfo[1] === 1451) {
                // Foreign key constraint violation
                return redirect('admin/dosen')->with('error', 'Data memiliki relasi, gagal menghapus');
            } else {
                // Other database error
                return redirect('admin/dosen')->with('error', 'Ada error ketika menghapus data');
            }
    }
    }


    // ======================= PRODI =======================
    //ambil data di database
    public function tampilDataProdi(){
        $dataProdi = Data_prodi::all();
        $dataJurusan = Jurusan::all();
        return view('\admin\data_prodi', compact('dataProdi', 'dataJurusan'));
    }
    public function tampilJenisProdi(){
        $dataJurusan = Jurusan::all();
        $dataProdi = Data_prodi::all();
        $dataKelasMahasiswa = Kelas_mahasiswa::all();
        return view('\admin\jenis_prodi', compact('dataJurusan','dataProdi', 'dataKelasMahasiswa'))->with('message', 'Jadwal kuliah Telah Ditambahkan');
    }
    //tambah data ke database
    public function tambahDataProdi(Request $request){
        $dataJurusan = Jurusan::all();
        DB::table('data_prodi')->insert([
            'kode_prodi' => $request->kode_prodi,
            'kode_jurusan' => $request->kode_jurusan,
            'nama' => $request->nama
        ]);
        return redirect('/admin/data_prodi')->with('add', 'Prodi telah ditambahkan');
    }

    // edit data prodi dosen
    public function editProdi($kode_prodi){
        $dataJurusan = Jurusan::all();
        $dataProdi = DB::table('data_prodi')->where('kode_prodi', $kode_prodi)->first();
        return view('admin/data_prodi', compact('dataProdi','dataJurusan'));
    }

    // update data prodi dosen
    public function updateDataProdi(Request $request, $id){
        $dataJurusan = Jurusan::all();
        $data = Data_prodi::where('kode_prodi', $id)->first();
        $data->kode_prodi = $request->kode_prodi;
        $data->kode_jurusan = $request->kode_jurusan;
        $data->nama = $request->nama;
        $data->save();
        return redirect('admin/data_prodi')->with('update', 'Prodi telah diupdate');
    }

    // hapus data prodi dosen
    public function hapusDataProdi($kode_prodi){
        try{
            DB::table('data_prodi')->where('kode_prodi', $kode_prodi)->delete();
            return redirect('admin/data_prodi')->with('delete', 'Prodi telah dihapus');
        }
        catch (QueryException $e) {
            if ($e->errorInfo[1] === 1451) {
                // Foreign key constraint violation
                return redirect('admin/data_prodi')->with('error', 'Data memiliki relasi, gagal menghapus');
            } else {
                // Other database error
                return redirect('admin/data_prodi')->with('error', 'Ada error ketika menghapus data');
            }
    }
    }

    // ====================================== DOSEN BUKAN ADMIN ======================================
    public function tampilBeranda(Request $request){
        return view('dosen/page/beranda');
    }
    public function tampilJadwal(Request $request){
        return view('dosen/page/jadwal');
    }
    public function tampilPresensi(Request $request){
        return view('dosen/page/presensi');
    }

    public function getCurrentScheduleByDosen()
    {
        $day = \Carbon\Carbon::now()->locale('id')->dayOfWeek;
        $currentTime = \Carbon\Carbon::now()->locale('id')->isoFormat('HH:mm:ss');
        $kode_dosen = session('kode_dosen'); // mengambil kode_dosen dari session

        $jam = Jam::where('jam_awal', '<=', $currentTime)
            ->where('jam_akhir', '>=', $currentTime)
            ->first();

        if ($jam) {
            try {
                $currentSchedule = Jadwal_kuliah::where('kode_hari', $day)
                    ->where('kode_jam_awal', '<=', $jam->kode_jam)
                    ->where('kode_jam_akhir', '>=', $jam->kode_jam)
                    ->where('kode_dosen', $kode_dosen)
                    ->firstOrFail();

                return response()->json([
                    'message' => 'Jadwal kuliah saat ini ditemukan',
                    'jadwal' => $currentSchedule
                ]);
            } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
                return response()->json([
                    'message' => 'Tidak ada jadwal kuliah saat ini'
                ], 404);
            }
        } else {
            return response()->json([
                'message' => 'Tidak ada jadwal kuliah saat ini'
            ], 404);
        }
    }

}
