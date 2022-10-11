<?php

namespace App\Http\DataTables;

use App\Http\FileUploader\BoxImageUpload;
use App\Models\Box;
use Aut\VueDataTable\Builders\DateInput;
use Aut\VueDataTable\Builders\TextInput;
use Aut\VueDataTable\Builders\HiddenInput;
use Aut\VueDataTable\Builders\CkEditor;
use Aut\VueDataTable\ApiResources\VueDataTable;
use Aut\VueDataTable\Traits\WithTranslation;
use Aut\VueDataTable\Builders\FilePond;


class BoxesDataTable extends VueDataTable
{
    use WithTranslation;

    public static $model = Box::class;


    public function mapper($request)
    {
        return [
            'id' => $this->id,
            'code' => $this->code,
            'title' => $this->title,
            'content' => $this->content,
            'image_path' => $this->image_path,
            'image_id' => $this->image_id,
            'show_order' =>$this->show_order,
            'created_at' => $this->created_at->format('Y-m-d'),
        ];
    }

    public static function fields()
    {
        return [
            HiddenInput::make('id'),
            TextInput::make('code')->label(trans('box.code')),
            TextInput::make('title')->label(trans('box.title'))->multiLang(),
            CkEditor::make('content')->label(trans('box.content'))->multiLang(),
            TextInput::make('show_order')->label(trans('box.show_order')),

            DateInput::make('created_at')->label(trans('box.publish_at')),

            FilePond::make('image_id', 'image_path', BoxImageUpload::class)->label(trans('box.image')),

        ];
    }

    public static function title()
    {
        return trans('box.boxes');
    }

    public static function singular()
    {
        return trans('box.box_singular');
    }
}
