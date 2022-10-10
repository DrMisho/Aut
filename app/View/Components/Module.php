<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Module extends Component
{
    public $suite;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($suite)
    {
        $this->suite = $suite;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.module');
    }
}
