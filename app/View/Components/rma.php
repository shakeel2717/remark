<?php

namespace App\View\Components;

use Illuminate\View\Component;

class rma extends Component
{
    public $warehouses;
    public $customers;
    public $suppliers;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($warehouses,$customers,$suppliers)
    {
        $this->warehouses = $warehouses;
        $this->customers = $customers;
        $this->suppliers = $suppliers;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.rma');
    }
}
