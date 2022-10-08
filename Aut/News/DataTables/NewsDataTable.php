<?php

namespace Aut\News\DataTables;

use App\Http\Autocompletes\CityAutocomplete;
use App\Http\Autocompletes\SeoAutocomplete;
use App\Http\DataTables\Actions\AddSeoAction;
use Aut\News\Autocompletes\CategoryAutocomplete;
use Aut\News\Autocompletes\StatusAutocomplete;
use Aut\News\Autocompletes\TagsAutocomplete;
use Aut\News\Models\News;
use Aut\News\ApiResources\Tags;
use Aut\VueDataTable\Builders\DateInput;
use Aut\VueDataTable\Builders\TextInput;
use Aut\VueDataTable\Builders\HiddenInput;
use Aut\VueDataTable\Builders\BelongsTo;
use Aut\VueDataTable\Builders\CkEditor;
use Aut\VueDataTable\Builders\BelongsToMany;
use Aut\VueDataTable\ApiResources\VueDataTable;
use Aut\VueDataTable\Builders\FilePond;
use Aut\News\FileUploader\ImageNewsUpload;
use Aut\VueDataTable\Traits\WithTranslation;
use Aut\News\FileUploader\VideoNewsUpload;
use Aut\VueDataTable\OptionsBuilder\ChipsOptions;
use Illuminate\Database\Eloquent\Relations\Relation;

class NewsDataTable extends VueDataTable
{
    use WithTranslation;

    public static $model = News::class;


    public function mapper($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'content' => $this->content,
            'category' => $this->category->name,
            'news_category_id' => $this->category->id,
            'status' => $this->status->name,
            'news_status_id' => $this->status->id,
            'tag' => Tags::collection($this->tag),
            'tag_id' => $this->tag->pluck('id'),
            'seo' => $this->seo,
            'city' => $this->city->name,
            'city_id' => $this->city->id,
            'image_id' => $this->image_id,
            'file_id' => $this->file_id,
            'image_path' => $this->image_path,
            'file_path' => $this->file_path,
            'publish_at' => $this->publish_at->format('Y-m-d'),
            'model' => $this->getMorphClass()
        ];
    }

    public static function fields()
    {
        return [
            HiddenInput::make('id'),
            TextInput::make('title')->label(trans('news::news.title'))->multiLang(),
            CkEditor::make('content')->label(trans('news::news.content'))->multiLang(),

            BelongsTo::make('category', 'news_category_id')->label(trans('news::news.news_category'))
                ->sortable('name')
                ->searchable('name')
                ->resource(CategoryAutocomplete::class),

            BelongsTo::make('status', 'news_status_id')->label(trans('news::news.news_status'))
                ->sortable('name')
                ->searchable('name')
                ->resource(StatusAutocomplete::class),

//            BelongsTo::make('seo', 'seo_id')->label(trans('news::news.news_seo'))
//                ->sortable('title')
//                ->searchable('title')
//                ->resource(SeoAutocomplete::class),

            BelongsTo::make('city', 'city_id')->label(trans('news::news.news_city'))
                ->sortable('name')
                ->searchable('name')
                ->resource(CityAutocomplete::class),

            BelongsToMany::make('tag', 'tag_id')->label(trans('news::news.tag'))
                ->optionText('name')
                ->resource(TagsAutocomplete::class)
                ->optionsTemplate(new ChipsOptions),

            FilePond::make('file_id', 'file_path', VideoNewsUpload::class)->label(trans('news::news.video')),
            FilePond::make('image_id', 'image_path', ImageNewsUpload::class)->label(trans('news::news.image')),

            DateInput::make('publish_at')->label(trans('news::news.publish_at')),
        ];
    }
    public static function actions()
    {
        return [
            AddSeoAction::make(),
        ];
    }

    public static function title()
    {
        return trans('news::news.news');
    }

    public static function singular()
    {
        return trans('news::news.news_singular');
    }
}
