<?php

namespace App\Http\Controllers;
use App\Models\Kelas_mahasiswa;
use App\Models\Mahasiswa;
use App\Models\Data_prodi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

class MahasiswaController extends Controller
{
    //ambil data di database
    public function tampilDataMahasiswa(Request $request){
        $dataMahasiswa = DB::table('mahasiswa')->get();
        $dataKelasMahasiswa = Kelas_mahasiswa::all();
        return view('/admin/mahasiswa', compact('dataMahasiswa', 'dataKelasMahasiswa'));
    }

    //tambah data ke database
    public function tambahDataMahasiswa(Request $request){
        $dataKelasMahasiswa = Kelas_mahasiswa::all();
        DB::table('mahasiswa')->insert([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'kode_kelas' => $request->kode_kelas
        ]);
        return redirect('/admin/mahasiswa')->with('add', 'Mahasiswa telah ditambahkan');
    }
    
    // edit data mahasiswa
    public function editMahasiswa($nim){
        $dataKelasMahasiswa = Kelas_mahasiswa::all();
        $dataMahasiswa = DB::table('mahasiswa')->where('nim', $nim)->first();
        return view('admin/mahasiswa', compact('dataMahasiswa', 'dataKelasMahasiswa'));
    }

    // update data mahasiswa
    public function updateDataMahasiswa(Request $request){
        $dataKelasMahasiswa = Kelas_mahasiswa::all();
        DB::table('mahasiswa')->where('nim', $request->nim)->update([
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'kode_kelas' => $request->kode_kelas
        ]);
        return redirect('admin/mahasiswa')->with('update', 'Mahasiswa telah diupdate');
    }

    // hapus data mahasiswa
    public function hapusDataMahasiswa($nim){
        try{
            DB::table('mahasiswa')->where('nim', $nim)->delete();
            return redirect('admin/mahasiswa')->with('delete', 'Mahasiswa telah dihapus');
        } catch (QueryException $e) {
            if ($e->errorInfo[1] === 1451) {
                // Foreign key constraint violation
                return redirect('admin/mahasiswa')->with('error', 'Data memiliki relasi, gagal menghapus');
            } else {
                // Other database error
                return redirect('admin/mahasiswa')->with('error', 'Ada error ketika menghapus data');
            }
    }
}

    //  ============================= KELAS MAHASISWA =============================
    //ambil data di database
    public function tampilDataKelasMahasiswa(Request $request){
        $dataKelasMahasiswa = Kelas_mahasiswa::all();
        $dataProdi = Data_prodi::all();
        return view('/admin/kelas_mahasiswa', compact('dataKelasMahasiswa', 'dataProdi'));
    }

    //tambah data ke database
    public function tambahDataKelasMahasiswa(Request $request){
        $dataProdi = Data_prodi::all();
        DB::table('kelas_mahasiswa')->insert([
            'kode_kelas' => $request->kode_kelas,
            'kode_prodi' => $request->kode_prodi
        ]);
        return redirect('/admin/kelas_mahasiswa')->with('add', 'Kelas telah ditambahkan');
    }

    // edit data kelas mahasiswa
    public function editKelasMahasiswa($kode_kelas){
        $dataProdi = Data_prodi::all();
        $dataKelasMahasiswa = DB::table('kelas_mahasiswa')->where('kode_kelas', $kode_kelas)->first();
        return view('admin/kelas_mahasiswa', compact('dataKelasMahasiswa', 'dataProdi'));
    }

    // update data kelas mahasiswa
    public function updateDataKelasMahasiswa(Request $request, $id){
        $dataProdi = Data_prodi::all();
        $dataKelasMahasiswa = Kelas_mahasiswa::where('kode_kelas', $id)->first();
        $dataKelasMahasiswa->kode_kelas = $request->kode_kelas;
        $dataKelasMahasiswa->kode_prodi = $request->kode_prodi;
        $dataKelasMahasiswa->save();
        return redirect('admin/kelas_mahasiswa')->with('update', 'Kelas Telah diupdate');
    }

    public function hapusDataKelasMahasiswa(Request $request, $id)
    {
       try{
            $dataKelasMahasiswa = Kelas_mahasiswa::where('kode_kelas',$id)->first();        
            $dataKelasMahasiswa->delete();
            return Redirect('admin/kelas_mahasiswa')->with('delete', 'Kelas Telah dihapus');
       } catch (QueryException $e) {
        if ($e->errorInfo[1] === 1451) {
            // Foreign key constraint violation
            return redirect('admin/kelas_mahasiswa')->with('error', 'Data memiliki relasi, gagal menghapus');
        } else {
            // Other database error
            return redirect('admin/kelas_mahasiswa')->with('error', 'Ada error ketika menghapus data');
        }
    }
    }

    // ====================================== MAHASISWA BUKAN ADMIN ======================================
    public function tampilBeranda(Request $request){
        return view('mahasiswa/page/beranda');
    }
    public function tampilJadwal(Request $request){
        return view('mahasiswa/page/jadwal');
    }
    public function tampilPresensi(Request $request){
        return view('mahasiswa/page/presensi');
    }
}
