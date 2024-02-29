<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'product_id', 'quantity', 'price', 'total', 'is_checked_out'];

    /**
     * The order that belong to the Cart
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function order(): BelongsToMany
    {
        return $this->belongsToMany(Order::class, 'order_cart', 'cart_id', 'order_id');
    }
}
