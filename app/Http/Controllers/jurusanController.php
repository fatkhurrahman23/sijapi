<?php

namespace App\Http\Controllers;
use App\models\Jurusan;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Session;
use Redirect;

class jurusanController extends Controller
{
     //ambil data di database
     public function tampilDataJurusan(Request $request){
        $dataJurusan = Jurusan::all();
        return view('admin/jurusan', compact('dataJurusan'));
    }

    //tambah data ke database
    public function tambahDataJurusan(Request $request){
        $dataJurusan = new Jurusan();
        $dataJurusan->kode_jurusan = $request->kode_jurusan;
        $dataJurusan->nama_jurusan = $request->nama_jurusan;

        $dataJurusan->save();
        return redirect('/admin/jurusan')->with('add', 'Jurusan telah ditambahkan');
    }


    // edit data jurusan
    public function editDataJurusan(Request $request, $id)
    {
        $dataJurusan = Jurusan::where('kode_jurusan', $id)->first();
        return view('/admin/edit_jurusan', compact('dataJurusan'));
    }

    public function updateDataJurusan(Request $request, $id)
    {
        $dataJurusan = Jurusan::where('kode_jurusan', $id)->first();
        $dataJurusan->kode_jurusan = $request->kode_jurusan;
        $dataJurusan->nama_jurusan = $request->nama_jurusan;
        $dataJurusan->save();
        return Redirect('/admin/jurusan')->with('update', 'Jurusan telah diupdate');
    }


    // hapus data dosen
    public function hapusDataJurusan(Request $request, $kode_jurusan)
    {
        try{
            $dataJurusan = Jurusan::where('kode_jurusan',$kode_jurusan)->first();        
            $dataJurusan->delete();
            Session::flash('success','Data berhasil dihapus');
            return Redirect('/admin/jurusan')->with('delete', 'Jurusan telah dihapus');
        }
        catch (QueryException $e) {
            if ($e->errorInfo[1] === 1451) {
                // Foreign key constraint violation
                return redirect('admin/jurusan')->with('error', 'Data memiliki relasi, gagal menghapus');
            } else {
                // Other database error
                return redirect('admin/jurusan')->with('error', 'Ada error ketika menghapus data');
            }
        }
    }
}
