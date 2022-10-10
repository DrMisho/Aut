<?php

namespace App\View\Components;

use Illuminate\View\Component;

class History extends Component
{
    public $boxes;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($boxes)
    {
        $this->boxes = $boxes;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.history');
    }
}
