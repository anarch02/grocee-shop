<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\Country;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::query()->inRandomOrder()->value('id'),
            'country_id' => Country::query()->inRandomOrder()->value('id'),
            'city_id' => City::query()->inRandomOrder()->value('id'),
            'address' => $this->faker->address,
            'zip_code' => $this->faker->postcode,
        ];
    }
}
