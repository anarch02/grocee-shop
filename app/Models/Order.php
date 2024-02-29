<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'payment_method',
        'payment_status',
        'item_count',
        'shipping_address',
        'total_price',
    ];

    /**
     * The cart that belong to the Order
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function cart(): BelongsToMany
    {
        return $this->belongsToMany(Cart::class, 'order_cart', 'order_id', 'cart_id');
    }
}
