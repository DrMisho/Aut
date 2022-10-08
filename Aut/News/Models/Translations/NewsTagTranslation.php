<?php

namespace Aut\News\Models\Translations;

use Illuminate\Database\Eloquent\Model;

class NewsTagTranslation extends Model
{
    public $timestamps = false;

    protected $fillable = ['name'];
}
