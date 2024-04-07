<?php

namespace App\Http\Controllers;
use App\Models\Jam;
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
        return view('\admin\jam', compact('data'));
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
        $data->range_jam = $request->range_jam;
        $data->save();
        Session::flash('success','Data berhasil ditambah');
        return Redirect('/admin/jam');
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
        $data = Jam::where('kode_jam', $id)->first();
        $data->kode_jam = $request->kode_jam;
        $data->range_jam = $request->range_jam;
        $data->save();
        Session::flash('success','Data berhasil diupdate');
        return Redirect('/admin/jam');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $data = Jam::where('kode_jam',$id)->first();        
        $data->delete();
        Session::flash('success','Data berhasil dihapus');
        return Redirect('/admin/jam');
    }
}
