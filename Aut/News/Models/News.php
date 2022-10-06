<?php

namespace Aut\News\Models;

use Aut\SeoBuilder\Models\Seo;
use Aut\GlobalSettings\Models\City;
use Illuminate\Support\Str;
use Aut\SiteBuilder\Models\Builder;
use Aut\VueDataTable\Builders\Label;
use Aut\FileUpload\Traits\FileUpload;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Aut\SiteBuilder\PageBuilder\Pageable;
use Aut\VueDataTable\Builders\HiddenInput;
use Aut\News\FileUploader\ImageNewsUpload;
use Aut\News\FileUploader\VideoNewsUpload;
use Illuminate\Database\Eloquent\SoftDeletes;
use Aut\Helper\Models\Scopes\AuthUser\AuthUser;
use Aut\News\Models\Translations\NewsTranslation;

class News extends Model implements Pageable
{
    use SoftDeletes, Translatable, FileUpload, AuthUser, Builder;

    public $translationModel = NewsTranslation::class;

    public $translatedAttributes = ['content', 'title'];

    protected $fillable = ['news_category_id', 'news_status_id', 'image_id', 'file_id', 'publish_at', 'seo_id' , 'city_id'];

    protected $appends = ['image_path', 'file_path', 'url_param'];

    protected $dates = ['publish_at'];

    public function status()
    {
        return $this->belongsTo(NewsStatus::class, 'news_status_id');
    }

    public function user()
    {
        return $this->belongsTo(app('news.models.user'), 'user_id');
    }

    public function tag()
    {
        return $this->belongsToMany(NewsTag::class, 'news_tag', 'news_id', 'tag_id');
    }

    public function category()
    {
        return $this->belongsTo(NewsCategory::class, 'news_category_id');
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function seo()
    {
        return $this->morphOne(Seo::class, 'buildable');
    }

    public function image()
    {
        return $this->fileRelation(ImageNewsUpload::class, 'image_id');
    }

    public function file()
    {
        return $this->fileRelation(VideoNewsUpload::class, 'file_id');
    }

    public function getImagePathAttribute()
    {
        return $this->getFilePath(ImageNewsUpload::class);
    }

    public function getFilePathAttribute()
    {
        return $this->getFilePath(VideoNewsUpload::class);
    }

    /**
     * Fields to show  to Admin when Adding Page Content
     *
     * @return array
     */
    public static function getPageableFields(): array
    {
        return [
            HiddenInput::make('id'),
            Label::make('title')->label(trans('app.title')),
        ];
    }

    /**
     * Used to build the url
     *
     * @param null|string $locale
     * @return string
     */
    public function getUrlParamAttribute(?string $locale = null): string
    {
        $name = $this->title;

        if ($locale) {
            $name = $this->{"title:{$locale}"};
        }

        return Str::slug("{$this->id}-{$name}"/*, '-', false*/);
    }

    public static function getMenuableTitle(): string
    {
        return trans('news::news.news');
    }

    public function getMenuTitleAttribute(): string
    {
        return $this->title;
    }
}
