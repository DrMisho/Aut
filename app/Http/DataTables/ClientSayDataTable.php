<?php

namespace App\Http\DataTables;

use App\Http\FileUploader\ClientSayFileUpload;
use App\Models\ClientSay;
use Aut\VueDataTable\Builders\TextInput;
use Aut\VueDataTable\Builders\HiddenInput;
use Aut\VueDataTable\ApiResources\VueDataTable;
use Aut\VueDataTable\Builders\FilePond;
use Aut\News\FileUploader\ImageNewsUpload;


class ClientSayDataTable extends VueDataTable
{

    public static $model = ClientSay::class;


    public function mapper($request)
    {
        return [
            'id' => $this->id,
            'client_name' => $this->client_name,
            'say' => $this->say,
            'file_id' => $this->file_id,
            'company' =>$this->company,
            'file_path' => $this->file_path
        ];
    }

    public static function fields()
    {
        return [
            HiddenInput::make('id'),
            TextInput::make('client_name')->label(trans('client_say.name')),
            TextInput::make('say')->label(trans('client_say.say')),
            TextInput::make('company')->label(trans('client_say.company')),
            FilePond::make('file_id', 'file_path', ClientSayFileUpload::class)->label(trans('client_say.image')),

        ];
    }

    public static function title()
    {
        return trans('client_say.clients_say');
    }

    public static function singular()
    {
        return trans('client_say.client_say_singular');
    }
}
