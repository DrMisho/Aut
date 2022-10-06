<?php

namespace App\Http\DataTables\Actions;

use Aut\VueDataTable\ActionBuilder\TableAction;
use Illuminate\Http\Request;

class DeleteSolutionAction extends TableAction
{
    protected function init()
    {
        $this
            ->icon('delete')
            ->tooltip('Delete')
            ->color('red')
            ->confirmation(false)
            ->name('delete_solution')
            ->event('deleteSolution');
    }

    public function action (Request $request, $item)
    {
        $item->deactivate();
    }
    
}