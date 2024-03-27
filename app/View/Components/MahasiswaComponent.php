<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Mahasiswa;

class MahasiswaComponent extends Component
{
    public $dataMahasiswa;

    public function __construct()
    {
        $this->dataMahasiswa = Mahasiswa::all();
    }

    public function render()
    {
        return view('components.mahasiswa-component');
    }
}

