<?php

namespace App\Models\Translations;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class CompetitionTranslation extends Model
{
    use SoftDeletes;
    public $timestamps = false;
    protected $fillable = ['title', 'position', 'organization'];
}