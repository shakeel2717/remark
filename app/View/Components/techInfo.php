<?php

namespace App\View\Components;

use Illuminate\View\Component;

class techInfo extends Component
{
    public $techInfos;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($techInfos)
    {
        $this->techInfos = $techInfos;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tech-info');
    }
}
