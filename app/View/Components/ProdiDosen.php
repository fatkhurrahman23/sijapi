<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Prodi_dosen;

class ProdiDosen extends Component
{
    public $dataProdiDosen;

    public function __construct()
    {
        $this->dataProdiDosen = Prodi_dosen::all();
    }

    public function render(): View|Closure|string
    {
        return view('components.prodi-dosen');
    }
}
