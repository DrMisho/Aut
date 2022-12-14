<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SuiteList extends Component
{
    public $liClass;
    public $ulClass;
    public $suites;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($liClass, $ulClass)
    {
        $this->liClass = $liClass;
        $this->ulClass = $ulClass;
        $this->suites = \App\Models\Suite::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.suite-list');
    }
}
