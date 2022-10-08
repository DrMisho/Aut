<?php

namespace App\Http\DataTables\Actions;

use Aut\VueDataTable\ActionBuilder\TableAction;
use Illuminate\Http\Request;

class DeleteSuiteAction extends TableAction
{
    protected function init()
    {
        $this
            ->icon('delete')
            ->tooltip('Delete')
            ->color('red')
            ->confirmation(true)
            ->name('delete_suite')
            ->event('deleteSuite');
    }

    public function action (Request $request, $item)
    {
        $item->deactivate();
    }
    
}