<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CompetitionItem extends Component
{

    public $competition;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($competition)
    {
        $this->competition = $competition;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.competition-item');
    }
}
