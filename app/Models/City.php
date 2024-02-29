<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class City extends Model
{
    use HasFactory;

    protected $fillable = ['country_id', 'name', 'id', 'slug'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function (City $city)
        {
            $city->slug = $city->slug ?? str($city->name)->slug();
        });
    }

    /**
     * Get the country that owns the City
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }
}
