<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Country extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'id', 'slug'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function (Country $country)
        {
            $country->slug = $country->slug ?? str($country->name)->slug();
        });
    }

    /**
     * Get all of the cities for the Country
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cities(): HasMany
    {
        return $this->hasMany(City::class);
    }
}
