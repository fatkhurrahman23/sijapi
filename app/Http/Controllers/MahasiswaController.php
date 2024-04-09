<?php

namespace App\Http\Controllers;
use App\Models\Kelas_mahasiswa;
use App\Models\Mahasiswa;
use App\Models\Data_prodi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        return redirect('/admin/mahasiswa');
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
        return redirect('admin/mahasiswa');
    }

    // hapus data mahasiswa
    public function hapusDataMahasiswa($nim){
        DB::table('mahasiswa')->where('nim', $nim)->delete();
        return redirect('admin/mahasiswa');
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
        return redirect('/admin/kelas_mahasiswa');
    }

    // edit data kelas mahasiswa
    public function editKelasMahasiswa($kode_kelas){
        $dataProdi = Data_prodi::all();
        $dataKelasMahasiswa = DB::table('kelas_mahasiswa')->where('kode_kelas', $kode_kelas)->first();
        return view('admin/kelas_mahasiswa', compact('dataKelasMahasiswa', 'dataProdi'));
    }

    // update data kelas mahasiswa
    public function updateDataKelasMahasiswa(Request $request){
        $dataProdi = Data_prodi::all();
        DB::table('kelas_mahasiswa')->where('id', $request->id)->update([
            'kode_kelas' => $request->kode_kelas,
            'kode_prodi' => $request->kode_prodi
        ]);
        return redirect('admin/kelas_mahasiswa');
    }

    public function hapusDataKelasMahasiswa(Request $request, $id)
    {
        $data = Kelas_mahasiswa::where('kode_kelas',$id)->first();        
        $data->delete();
        return Redirect('admin/kelas_mahasiswa');
    }
}
