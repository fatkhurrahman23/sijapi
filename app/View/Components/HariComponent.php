<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Hari;

class HariComponent extends Component
{
    public $dataHari;

    public function __construct()
    {
        $this->dataHari = Hari::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.hari-component');
    }
}
