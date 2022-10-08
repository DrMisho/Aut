<?php

namespace App\Models\Translations;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class BranchTranslation extends Model
{
    use SoftDeletes;
    public $timestamps = false;
    protected $fillable = ['address'];
}
