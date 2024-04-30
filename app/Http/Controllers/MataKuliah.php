<?php

namespace App\Http\Controllers;
use App\Models\Mata_kuliah;
use App\Models\Kelas_mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;

class MataKuliah extends Controller
{
    //ambil data di database
    public function tampilMataKuliah(){
        $data = Mata_kuliah::all();
        $dataKelasMahasiswa = Kelas_mahasiswa::all();
        return view('\admin\matkul', compact('data', 'dataKelasMahasiswa'));
    }

    //tambah data ke database
    public function tambahMataKuliah(Request $request){
        $data = new Mata_kuliah();
        $dataKelasMahasiswa = Kelas_mahasiswa::all();
        $data->kode_mata_kuliah = $request->kode_mata_kuliah;
        $data->nama_mata_kuliah = $request->nama_mata_kuliah;
        $data->sks = $request->sks;
        $data->semester = $request->semester;
        $data->jenis = $request->jenis;
        $data->save();
        return redirect('admin/matkul')->with('add', 'Matkul telah ditambahkan');
    }


    //edit data
    public function editMataKuliah($kode_mata_kuliah){
        $dataKelasMahasiswa = Kelas_mahasiswa::all();
        $data = DB::table('mata_kuliah')->where('kode_mata_kuliah', $kode_mata_kuliah)->first();
        return view('admin/matkul', compact('data', 'dataKelasMahasiswa'));
    }

    //update data
    public function updateDataMataKuliah(Request $request, $kode_mata_kuliah){
        $dataKelasMahasiswa = Kelas_mahasiswa::all();
        DB::table('mata_kuliah')->where('kode_mata_kuliah', $kode_mata_kuliah)->update([
            // 'kode_kelas' => $request->kode_kelas,
            'nama_mata_kuliah' => $request->nama_mata_kuliah,
            'sks' => $request->sks,
            'semester' => $request->semester,
            'jenis' => $request->jenis
        ]);
        return redirect('admin/matkul')->with('update', 'Matkul telah diupdate');
    }

    //hapus data
    public function hapusDataMataKuliah($kode_mata_kuliah){
        try{
            $dataKelasMahasiswa = Kelas_mahasiswa::all();
            DB::table('mata_kuliah')->where('kode_mata_kuliah', $kode_mata_kuliah)->delete();
            return redirect('admin/matkul')->with('delete', 'Matkul telah dihapus');
        }
        catch (QueryException $e) {
            if ($e->errorInfo[1] === 1451) {
                // Foreign key constraint violation
                return redirect('admin/matkul')->with('error', 'Data memiliki relasi, gagal menghapus');
            } else {
                // Other database error
                return redirect('admin/matkul')->with('error', 'Ada error ketika menghapus data');
            }
    }
    }
    
}
