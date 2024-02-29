<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['slug', 'name', 'icon', 'id', 'description'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function (Category $category)
        {
            $category->slug = $category->slug ?? str($category->name)->slug();
        });
    }

    /**
     * Get all of the subcategories for the Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subcategories(): HasMany
    {
        return $this->hasMany(SubCategory::class);
    }
}
