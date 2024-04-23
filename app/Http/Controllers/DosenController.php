<?php

namespace App\Http\Controllers;
use App\Models\Data_prodi;
use App\Models\Dosen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

class DosenController extends Controller
{
    //ambil data di database
    public function tampilDataDosen(Request $request){
        $dataDosen = Dosen::all();
        $dataProdi = Data_prodi::all();
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
    public function editDosen($nip){
        $dataDosen = DB::table('dosen')->where('kode_dosen', $kode_dosen)->first();
        $dataProdi = Data_prodi::all();
        return view('admin/dosen', compact('dataDosen', 'dataProdi'));
    }

    // update data dosen
    public function updateDataDosen(Request $request){
        $dataProdi = Data_prodi::all();
        DB::table('dosen')->where('kode_dosen', $request->kode_dosen)->update([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'kode_prodi' => $request->kode_prodi
        ]);
        return redirect('admin/dosen')->with('update', 'Dosen telah diupdate');
    }


    // hapus data dosen
    public function hapusDataDosen($kode_dosen){
        DB::table('dosen')->where('kode_dosen', $kode_dosen)->delete();
        return redirect('admin/dosen')->with('delete', 'Dosen telah dihapus');
    }


    // ======================= PRODI =======================
    //ambil data di database
    public function tampilDataProdi(){
        $dataProdi = Data_prodi::all();
        return view('\admin\data_prodi', compact('dataProdi'));
    }
    
    //tambah data ke database
    public function tambahDataProdi(Request $request){
        DB::table('data_prodi')->insert([
            'kode_prodi' => $request->kode_prodi,
            'nama' => $request->nama
        ]);
        return redirect('/admin/data_prodi')->with('add', 'Prodi telah ditambahkan');
    }

    // edit data prodi dosen
    public function editProdi($kode_prodi){
        $dataProdi = DB::table('data_prodi')->where('kode_prodi', $kode_prodi)->first();
        return view('admin/data_prodi', compact('dataProdi'));
    }

    // update data prodi dosen
    public function updateDataProdi(Request $request, $id){
        $data = Data_prodi::where('kode_prodi', $id)->first();
        $data->kode_prodi = $request->kode_prodi;
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
}
