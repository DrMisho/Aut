<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ContributionItem extends Component
{

    public $contribution;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($contribution)
    {
        $this->contribution = $contribution;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.contribution-item');
    }
}
