<?php

namespace App\View\Components;

use Illuminate\View\Component;

class assignEmployee extends Component
{
    public $device;
    public $allEmployees;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($device,$allEmployees)
    {
        $this->device = $device;
        $this->allEmployees = $allEmployees;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.assign-employee');
    }
}
