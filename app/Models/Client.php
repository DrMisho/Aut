<?php

namespace App\Models;

use App\Http\FileUploader\ClientFileUpload;
use App\Http\FileUploader\ClientLogoUpload;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use App\Models\Suite;
use Aut\GlobalSettings\Models\Country;
use App\Models\Translations\ClientTranslation;
use Aut\SiteBuilder\Models\Builder;
use Aut\FileUpload\Traits\FileUpload;
use Illuminate\Database\Eloquent\SoftDeletes;


class Client extends Model implements TranslatableContract
{
    use Translatable;
    use SoftDeletes;
    use FileUpload;
    use Builder;
    
    public $translationModel = ClientTranslation::class;

    public $translatedAttributes = ['name'];
    protected $fillable = ['website', 'show_order', 'logo_id', 'testimonial_id', 'suite_id', 'country_id'];
    protected $appends = ['logo_path', 'file_path'];

    public function suite()
    {
        return $this->belongsTo(Suite::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function logo()
    {
        return $this->fileRelation(ClientLogoUpload::class, 'logo_id');
    }

    public function getLogoPathAttribute()
    {
        return $this->getFilePath(ClientLogoUpload::class);
    }

    public function file()
    {
        return $this->fileRelation(ClientFileUpload::class, 'testimonial_id');
    }

    public function getFilePathAttribute()
    {
        return $this->getFilePath(ClientFileUpload::class);
    }
}
