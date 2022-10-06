<?php

namespace App\Models;

use App\Http\FileUploader\BranchImageUpload;
use App\Http\FileUploader\BranchLogoUpload;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use App\Models\Translations\BranchTranslation;
use Aut\SiteBuilder\Models\Builder;
use Aut\FileUpload\Traits\FileUpload;

use Aut\GlobalSettings\Models\Country;


class Branch extends Model implements TranslatableContract
{
    use Translatable;
    use SoftDeletes;
    use Builder;
    use FileUpload;
    

    public $translationModel = BranchTranslation::class;

    public $translatedAttributes = ['address'];

    protected $fillable = ['country_id' , 'phone', 'email', 'image_id', 'logo_id'];

    protected $appends = ['image_path', 'logo_path'];
    
    public function country()
    {
        return $this->belongsTo(Country::class ,'country_id');
    }

    public function image()
    {
        return $this->fileRelation(BranchImageUpload::class, 'image_id');
    }

    public function getImagePathAttribute()
    {
        return $this->getFilePath(BranchImageUpload::class);
    }

    public function logo()
    {
        return $this->fileRelation(BranchLogoUpload::class, 'logo_id');
    }

    public function getLogoPathAttribute()
    {
        return $this->getFilePath(BranchLogoUpload::class);
    }
}
