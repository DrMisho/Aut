<?php

namespace App\Models;

use App\Http\FileUploader\TeamImageUpload;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use App\Models\Translations\TeamTranslation;
use Aut\GlobalSettings\Models\JobTitle;
use Aut\GlobalSettings\Models\SocialNetwork;
use Illuminate\Database\Eloquent\SoftDeletes;
use Aut\SiteBuilder\Models\Builder;
use Aut\FileUpload\Traits\FileUpload;


class Team extends Model implements TranslatableContract
{
    use Translatable;
    use SoftDeletes;
    use FileUpload;
    use Builder;
    
    public $translationModel = TeamTranslation::class;
    public $translatedAttributes = ['name'];
    protected $fillable = ['tags', 'show_order', 'pic_name_id', 'job_title_id'];

    protected $appends = ['image_path'];

    protected $with = ['jobTitle', 'socialNetworks'];

    public function jobTitle()
    {
        return $this->belongsTo(JobTitle::class, 'job_title_id');
    }

    public function socialNetworks()
    {
        return $this->belongsToMany(SocialNetwork::class, 'team_social', 'team_id', 'social_network_id')->withPivot('account');
    }
    public function competitions()
    {
        return $this->hasMany(Competition::class);
    }

    public function image()
    {
        return $this->fileRelation(TeamImageUpload::class, 'pic_name_id');
    }

    public function getImagePathAttribute()
    {
        return $this->getFilePath(TeamImageUpload::class);
    }

}
