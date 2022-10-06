<?php

namespace Aut\News\Models\Translations;

use Illuminate\Database\Eloquent\Model;

class NewsTypeTranslation extends Model
{
    public $timestamps = false;

    protected $fillable = ['name'];
}
