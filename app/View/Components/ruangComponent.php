<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Ruang;

class RuangComponent extends Component
{
    public $dataRuang;

    public function __construct()
    {
        $this->dataRuang = Ruang::all();
    }

    public function render(): View|Closure|string
    {
        return view('components.ruang-component');
    }
}
