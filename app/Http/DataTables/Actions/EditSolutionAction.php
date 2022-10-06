<?php

namespace App\Http\DataTables\Actions;

use Aut\VueDataTable\ActionBuilder\TableAction;
use Illuminate\Http\Request;

class EditSolutionAction extends TableAction
{
    protected function init()
    {
        $this
            ->icon('create')
            ->tooltip('Edit')
            ->color('green')
            ->name('edit_solution')
            ->event('editSolution');
    }

    public function action (Request $request, $item)
    {
        $item->deactivate();
    }
    
}
