<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Kelas_mahasiswa;

class kelasMahasiswa extends Component
{
    public $dataKelasMahasiswa;

    public function __construct()
    {
        $this->dataKelasMahasiswa = Kelas_mahasiswa::all();
    }

    public function render(): View|Closure|string
    {
        return view('components.kelas-mahasiswa');
    }
}
