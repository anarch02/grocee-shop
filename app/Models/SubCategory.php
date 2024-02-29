<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'slug', 'name', 'id', 'description'];
    
    protected static function boot()
    {
        parent::boot();

        static::creating(function (SubCategory $sub_category)
        {
            $sub_category->slug = $sub_category->slug ?? str($sub_category->name)->slug();
        });
    }
}
