<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use App\Models\Translations\EventTranslation;
use Aut\GlobalSettings\Models\City;
use Illuminate\Database\Eloquent\SoftDeletes;
use Aut\SiteBuilder\Models\Builder;


class Event extends Model implements TranslatableContract
{
    use Translatable;
    use SoftDeletes;
    use Builder;
    
    public $translationModel = EventTranslation::class;

    public $translatedAttributes = ['title', 'description', 'location'];
    protected $fillable = ['event_code', 'event_date', 'city_id'];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    protected $casts = [
        'event_date' => 'datetime',
    ];
}