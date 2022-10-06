<?php

namespace App\Http\DataTables\Actions;

use Aut\VueDataTable\ActionBuilder\TableAction;
use Illuminate\Http\Request;

class DeleteTeamAction extends TableAction
{
    protected function init()
    {
        $this
            ->icon('delete')
            ->tooltip('Delete')
            ->color('red')
            ->confirmation(true)
            ->name('delete_team')
            ->event('deleteTeam');
    }

    public function action (Request $request, $item)
    {
        $item->deactivate();
    }
    
}