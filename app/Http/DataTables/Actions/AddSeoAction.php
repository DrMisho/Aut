<?php

namespace App\Http\DataTables\Actions;

use Aut\VueDataTable\ActionBuilder\TableAction;
use Illuminate\Http\Request;

class AddSeoAction extends TableAction
{
    protected function init()
    {
        $this
            ->icon('add')
            ->tooltip('Add')
            ->color('green')
            ->name('Add_Seo')
            ->event('addSeo');
    }

    public function action (Request $request, $item)
    {
        $item->deactivate();
    }
}
