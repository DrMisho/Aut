<?php

namespace Aut\News\Models\Translations;

use Illuminate\Database\Eloquent\Model;

class NewsTranslation extends Model
{
    public $timestamps = false;

    protected $fillable = ['content', 'title'];
}
