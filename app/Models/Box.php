<?php

namespace App\Models;

use App\Http\FileUploader\BoxImageUpload;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use App\Models\Translations\BoxTranslation;
use Illuminate\Database\Eloquent\SoftDeletes;
use Aut\SiteBuilder\Models\Builder;
use Aut\FileUpload\Traits\FileUpload;



class Box extends Model implements TranslatableContract
{
    use Builder;
    use Translatable;
    use SoftDeletes;
    use FileUpload;
    public $translationModel = BoxTranslation::class;

    public $translatedAttributes = ['title', 'content'];
    protected $fillable = ['code', 'show_order', 'image_id'];
    protected $appends = ['image_path'];

    public function image()
    {
        return $this->fileRelation(BoxImageUpload::class, 'image_id');
    }

    public function getImagePathAttribute()
    {
        return $this->getFilePath(BoxImageUpload::class);
    }
}
