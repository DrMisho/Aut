<?php

namespace App\Models\Translations;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class SuiteTranslation extends Model
{
    use SoftDeletes;
    public $timestamps = false;
    protected $fillable = ['name', 'long_name', 'vision'];


}
