<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cart>
 */
class CartFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $product = Product::query()->inRandomOrder();
        $price = $product->value('price');
        $quantity = $this->faker->numberBetween(1, 10);
        return [
            'user_id' => User::query()->inRandomOrder()->value('id'),
            'product_id' => $product->value('id'),
            'quantity' => $quantity,
            'price' => $price,
            'is_checked_out' => $this->faker->boolean(),
            'total' => $price * $quantity,
        ];
    }
}
