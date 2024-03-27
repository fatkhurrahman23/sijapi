<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\MataKuliah;

class MataKuliahComponent extends Component
{
    public $dataMataKuliah;

    public function __construct()
    {
        $this->dataMataKuliah = MataKuliah::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.mata-kuliah-component');
    }
}
