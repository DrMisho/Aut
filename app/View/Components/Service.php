<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Service extends Component
{
    public $clients;
    public $suites;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($clients, $suites)
    {
        $this->clients = $clients;
        $this->suites = $suites;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.service');
    }
}
