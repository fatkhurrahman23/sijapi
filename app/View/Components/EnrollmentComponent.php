<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Enrollment;

class EnrollmentComponent extends Component
{
    public $dataEnrollment;

    public function __construct()
    {
        $this->dataEnrollment = Enrollment::all();
    }



    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.enrollment-component');
    }
}
