<?php

namespace App\Http\DataTables\Actions;

use Aut\VueDataTable\ActionBuilder\ToolbarAction;

class TestAction extends ToolbarAction
{
    protected function init()
    {
        $this
            ->attributes([
                'tag' => 'a',
                'href' => url('images/background.jpg'),
                'download' => 'test background.jpg',
            ])
            ->small()
            ->icon('fas fa-download')
            ->tooltip('Download')
            ->color('green')
            ->name('download_background')
            ->confirmation(true)
            ->event(null);
    }
}
