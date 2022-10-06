<?php

namespace App\Models\Translations;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class SeoTranslation extends Model
{
    use SoftDeletes;
    public $timestamps = false;
    protected $fillable = ['title', 'description', 'keyword'];


}
