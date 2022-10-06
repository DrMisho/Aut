<?php

namespace Aut\Cake\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Aut\SiteBuilder\Models\Builder;
use Aut\SiteBuilder\PageBuilder\Pageable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Str;




class Cake extends Model
{
    use HasFactory;

    protected $fillable = ['cake_name', 'price', 'description', 'slug'];

    public static function booted() {
        static::creating(function ($model) {
            $model->slug = Str::slug($model->cake_name, '-');
        });
    }
}
