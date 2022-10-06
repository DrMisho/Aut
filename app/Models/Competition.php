<?php

namespace App\Models;

use App\Http\FileUploader\CompetitionImageUpload;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use App\Models\Team;
use Aut\GlobalSettings\Models\City;
use Illuminate\Database\Eloquent\SoftDeletes;
use Aut\SiteBuilder\Models\Builder;
use Aut\FileUpload\Traits\FileUpload;

use App\Models\Translations\CompetitionTranslation;

class Competition extends Model implements TranslatableContract
{
    use Translatable, SoftDeletes, FileUpload, Builder;

    public $translationModel = CompetitionTranslation::class;


    public $translatedAttributes = ['title', 'position', 'organization'];
    protected $fillable = ['city_id', 'location_type', 'year', 'show_order', 'image_id', 'team_id'];
    protected $appends = ['image_path'];

    protected $casts = [
        'year' => 'datetime',
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function image()
    {
        return $this->fileRelation(CompetitionImageUpload::class, 'image_id');
    }

    public function getImagePathAttribute()
    {
        return $this->getFilePath(CompetitionImageUpload::class);
    }


}
