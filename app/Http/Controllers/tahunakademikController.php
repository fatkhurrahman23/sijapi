<?php

namespace App\Http\Controllers;
use App\Models\Tahun_akademik;
use Illuminate\Http\Request;

class tahunakademikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function tampilDataTahunAkademik()
    {
        $data = Tahun_akademik::all();
        return view('\admin\tahun_akademik', compact('data'));
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
    public function tambahDataTahunAkademik(Request $request)
    {
        $data = new Tahun_akademik();
        $data->kode_tahun_akademik = $request->kode_tahun_akademik;
        $data->tahun_akademik = $request->tahun_akademik;
        $data->status = $request->status;
        $data->save();
        return Redirect('/admin/tahun_akademik');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
