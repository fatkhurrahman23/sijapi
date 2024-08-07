<?php

namespace App\Http\Controllers;
use App\Models\Jam;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Redirect;

class jamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Jam::all();
        return view('\admin\jam', compact('data'))->with('message', 'Jam Telah Ditambahkan');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Jam();
        $data->kode_jam = $request->kode_jam;
        $data->jam_awal = $request->jam_awal;
        $data->jam_akhir = $request->jam_akhir;
        $data->save();
        return Redirect('/admin/jam')->with('add', 'Jam telah ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        $data = Jam::where('kode_jam', $id)->first();
        return view('/admin/edit_jam', compact('data'));
    }

    public function update(Request $request, $id)
    {
      
        try {
            $data = Jam::where('kode_jam', $id)->first();
            $data->kode_jam = $request->kode_jam;
            $data->jam_awal = $request->jam_awal;
            $data->jam_akhir = $request->jam_akhir;
            $data->save();
            return Redirect('/admin/jam')->with('update', 'Jam telah diupdate');
        } catch (QueryException $e) {
            if ($e->errorInfo[1] === 1451) {
                // Foreign key constraint violation
                return redirect('admin/jam')->with('error', 'Data still has related data, cannot be update');
            } else {
                // Other database error
                return redirect('admin/jam')->with('error', 'An error occurred while update data');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        try{
            $data = Jam::where('kode_jam',$id)->first();        
            $data->delete();
            Session::flash('success','Data berhasil dihapus');
            return Redirect('/admin/jam')->with('delete', 'Jam telah dihapus');
        }
        catch (QueryException $e) {
            if ($e->errorInfo[1] === 1451) {
                // Foreign key constraint violation
                return redirect('admin/jam')->with('error', 'Data memiliki relasi, gagal menghapus');
            } else {
                // Other database error
                return redirect('admin/jam')->with('error', 'Ada error ketika menghapus data');
            }
        }
    }
}
