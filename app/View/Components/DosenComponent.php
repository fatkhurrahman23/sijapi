<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Dosen;

class DosenComponent extends Component
{
    public $dataDosen;

    public function __construct()
    {
        $this->dataDosen = Dosen::all();
    }

    public function render()
    {
        return view('components.dosen-component');
    }
}
