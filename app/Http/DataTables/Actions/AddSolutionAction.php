<?php

namespace App\Http\DataTables\Actions;

use Aut\VueDataTable\ActionBuilder\ToolbarAction;

class AddSolutionAction extends ToolbarAction
{
    protected function init()
    {
        $this
            ->icon('add')
            ->tooltip('Add')
            ->color('green')
            ->name('Add')
            ->confirmation(true)
            ->event('addSolution');
    }
}
