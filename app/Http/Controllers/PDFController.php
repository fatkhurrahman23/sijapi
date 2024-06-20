<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function index()
    {
        return view("admin.tampilan-jadwal");
    }
    public function generatePDF()
    {
        $data = ['title' => 'Welcome to HDTuto.com'];
        $pdf = PDF::loadView('myPDF', $data);
        return $pdf->download('hdtuto.pdf');
    }
}
