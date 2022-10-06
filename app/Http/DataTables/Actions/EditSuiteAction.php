<?php

namespace App\Http\DataTables\Actions;

use Aut\VueDataTable\ActionBuilder\TableAction;
use Illuminate\Http\Request;

class EditSuiteAction extends TableAction
{
    protected function init()
    {
        $this
            ->icon('create')
            ->tooltip('Edit')
            ->color('green')
            ->event('editSuite');
    }

    public function action (Request $request, $item)
    {
        $item->deactivate();
    }
}
