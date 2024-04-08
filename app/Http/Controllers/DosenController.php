<?php

namespace App\Http\Controllers;
use App\Models\Prodi_dosen;
use App\Models\Dosen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DosenController extends Controller
{
    //ambil data di database
    public function tampilDataDosen(Request $request){
        $dataDosen = DB::table('dosen')->get();
        $dataProdiDosen = Prodi_dosen::all();
        return view('admin/dosen', compact('dataDosen', 'dataProdiDosen'));
    }

    //tambah data ke database
    public function tambahDataDosen(Request $request){
        $dataDosen = new Dosen();
        $dataProdiDosen = Prodi_dosen::all();
        $dataDosen->kode_dosen = $request->kode_dosen;
        $dataDosen->nip = $request->nip;
        $dataDosen->nama = $request->nama;
        $dataDosen->alamat = $request->alamat;
        $dataDosen->no_telp = $request->no_telp;
        $dataDosen->kode_prodi = $request->kode_prodi; 
    
        $dataDosen->save();
        return redirect('/admin/dosen');
    }


    // edit data dosen
    public function editDosen($nip){
        $dataDosen = DB::table('dosen')->where('kode_dosen', $kode_dosen)->first();
        $dataProdiDosen = Prodi_dosen::all();
        return view('admin/dosen', compact('dataDosen', 'dataProdiDosen'));
    }

    // update data dosen
    public function updateDataDosen(Request $request){
        $dataProdiDosen = Prodi_dosen::all();
        DB::table('dosen')->where('kode_dosen', $request->kode_dosen)->update([
            
            'nip' => $request->nip,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'kode_prodi' => $request->kode_prodi
        ]);
        return redirect('admin/dosen');
    }


    // hapus data dosen
    public function hapusDataDosen($kode_dosen){
        DB::table('dosen')->where('kode_dosen', $kode_dosen)->delete();
        return redirect('admin/dosen');
    }


    // ======================= PRODI DOSEN =======================
    //ambil data di database
    public function tampilDataProdiDosen(){
        $dataProdiDosen = Prodi_dosen::all();
        return view('\admin\prodi_dosen', compact('dataProdiDosen'));
    }

    //tambah data ke database
    public function tambahDataProdiDosen(Request $request){
        DB::table('prodi_dosen')->insert([
            'kode_prodi' => $request->kode_prodi,
            'nama' => $request->nama
        ]);
        return redirect('/admin/prodi_dosen');
    }

    // edit data prodi dosen
    public function editProdiDosen($kode_prodi){
        $dataProdiDosen = DB::table('prodi_dosen')->where('kode_prodi', $kode_prodi)->first();
        return view('admin/prodi_dosen', compact('dataProdiDosen'));
    }

    // update data prodi dosen
    public function updateDataProdiDosen(Request $request, $id){
        $data = Prodi_dosen::where('kode_prodi', $id)->first();
        $data->kode_prodi = $request->kode_prodi;
        $data->nama = $request->nama;
        $data->save();
        return redirect('admin/prodi_dosen');
    }

    // hapus data prodi dosen
    public function hapusDataProdiDosen($kode_prodi){
        DB::table('prodi_dosen')->where('kode_prodi', $kode_prodi)->delete();
        return redirect('admin/prodi_dosen');
    }
}
