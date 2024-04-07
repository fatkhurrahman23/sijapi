<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Jam;

class JamComponent extends Component
{
    public $dataJamKuliah;

    public function __construct()
    {
        $this->dataJamKuliah = Jam::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.jam-component');
    }
}
