<?php

namespace App\Models;

use App\Http\FileUploader\ContributionFileUpload;
use App\Http\FileUploader\ContributionImageUpload;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use App\Models\Translations\ContributionTranslation;
use Illuminate\Database\Eloquent\SoftDeletes;
use Aut\SiteBuilder\Models\Builder;
use Aut\FileUpload\Traits\FileUpload;


class Contribution extends Model implements TranslatableContract
{
    use Translatable;
    use SoftDeletes;
    use FileUpload;
    use Builder;
    
    public $translationModel = ContributionTranslation::class;

    public $translatedAttributes = ['name'];
    protected $fillable = ['contribution_date', 'contribution_file_id', 'image_id'];
    protected $appends = ['image_path', 'file_path'];

    protected $casts = [
        'contribution_date' => 'datetime',
    ];

    public function image()
    {
        return $this->fileRelation(ContributionImageUpload::class, 'image_id');
    }

    public function getImagePathAttribute()
    {
        return $this->getFilePath(ContributionImageUpload::class);
    }

    public function file()
    {
        return $this->fileRelation(ContributionFileUpload::class, 'contribution_file_id');
    }

    public function getFilePathAttribute()
    {
        return $this->getFilePath(ContributionFileUpload::class);
    }
}
