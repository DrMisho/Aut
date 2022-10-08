<?php

namespace App\Models\Translations;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class PageTranslation extends Model
{
    use SoftDeletes;
    public $timestamps = false;
    protected $fillable = ['subtitle', 'content', 'created_at', 'updated_at'];
}
