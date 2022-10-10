<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BenefitItem extends Component
{
    public $heading;
    public $collapse;
    public $title;
    public $paragraph;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($heading, $collapse, $title, $paragraph)
    {
        $this->heading = $heading;
        $this->collapse = $collapse;
        $this->title = $title;
        $this->paragraph = $paragraph;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.benefit-item');
    }
}
