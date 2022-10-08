<?php

namespace App\Http\DataTables\Actions;

use Aut\VueDataTable\ActionBuilder\ToolbarAction;

class AddSuiteAction extends ToolbarAction
{
    protected function init()
    {
        $this
            ->icon('add')
            ->tooltip('Add')
            ->color('green')
            ->name('Add')
            ->confirmation(true)
            ->event('addSuite');
    }
}
