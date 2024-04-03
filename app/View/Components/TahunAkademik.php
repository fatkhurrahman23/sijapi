<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Tahun_akademik;

class TahunAkademik extends Component
{
    public $dataTahunAkademik;

    public function __construct()
    {
        $this->dataTahunAkademik = Tahun_akademik::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.tahun-akademik');
    }
}
