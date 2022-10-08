<?php

namespace Aut\News\Models\Translations;

use Illuminate\Database\Eloquent\Model;

class NewsCategoryTranslation extends Model
{
    public $timestamps = false;

    protected $fillable = ['name'];
}
