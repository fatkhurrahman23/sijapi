<?php

namespace App\Http\Controllers;
use App\Models\Mata_kuliah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MataKuliah extends Controller
{
    //ambil data di database
    public function tampilMataKuliah(){
        $data = Mata_kuliah::all();
        return view('\admin\matkul', compact('data'));
    }

    //tambah data ke database
    public function tambahMataKuliah(Request $request){
        $data = new Mata_kuliah();
        $data->kode_mata_kuliah = $request->kode_mata_kuliah;
        $data->kode_kelas = $request->kode_kelas;
        $data->nama = $request->nama;
        $data->sks = $request->sks;
        $data->semester = $request->semester;
        $data->jenis = $request->jenis;
        $data->save();
        return redirect('/admin/matkul');
    }


    //edit data
    public function editMataKuliah($kode_mata_kuliah){
        $mataKuliahToEdit = DB::table('mata_kuliah')->where('kode_mata_kuliah', $kode_mata_kuliah)->first();
        return view('admin/edit_matakuliah', ['mataKuliahToEdit' => $mataKuliahToEdit]);
    }

    //update data
    public function updateDataMataKuliah(Request $request, $kode_mata_kuliah){
        DB::table('mata_kuliah')->where('kode_mata_kuliah', $kode_mata_kuliah)->update([
            // 'kode_kelas' => $request->kode_kelas,
            'nama' => $request->nama,
            'sks' => $request->sks,
            'semester' => $request->semester,
            'jenis' => $request->jenis
        ]);
        return redirect('admin/matakuliah');
    }

    //hapus data
    public function hapusDataMataKuliah($kode_mata_kuliah){
        DB::table('mata_kuliah')->where('kode_mata_kuliah', $kode_mata_kuliah)->delete();
        return redirect('admin/matakuliah');
    }
    
}
