<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'code' => $this->faker->unique()->numberBetween(1, 10000), // здесь должен быть код прокудта типа 565461
            'name' => $this->faker->sentence(),
            'price' => $this->faker->randomFloat(2, 1, 1000),
            'new_price' => $this->faker->randomFloat(2, 1, 1000),
            'stock' => $this->faker->numberBetween(1, 100),
            'active' => $this->faker->boolean(),
            'preview' => $this->faker->text(),
            'description' =>'
            <div class="product__tab--content__step mb-30">
                                            <h2 class="product__tab--content__title h4 mb-10">Nam provident sequi</h2>
                                            <p class="product__tab--content__desc">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam provident sequi, nemo sapiente culpa nostrum rem eum perferendis quibusdam, magnam a vitae corporis! Magnam enim modi, illo harum suscipit tempore aut dolore doloribus deserunt voluptatum illum, est porro? Ducimus dolore accusamus impedit ipsum maiores, ea iusto temporibus numquam eaque mollitia fugiat laborum dolor tempora eligendi voluptatem quis necessitatibus nam ab?</p>
                                        </div>
                                        <div class="product__tab--content__step">
                                            <h2 class="product__tab--content__title h4 mb-10">More Details</h2>
                                            <ul>
                                                <li class="product__tab--content__list">
                                                    <svg class="product__tab--content__list--icon" xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M268 112l144 144-144 144M392 256H100"></path></svg>
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, dolorum?
                                                </li>
                                                <li class="product__tab--content__list">
                                                    <svg class="product__tab--content__list--icon" xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M268 112l144 144-144 144M392 256H100"></path></svg>
                                                    Magnam enim modi, illo harum suscipit tempore aut dolore?
                                                </li>
                                                <li class="product__tab--content__list">
                                                    <svg class="product__tab--content__list--icon" xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M268 112l144 144-144 144M392 256H100"></path></svg>
                                                    Numquam eaque mollitia fugiat laborum dolor tempora;
                                                </li>
                                                <li class="product__tab--content__list">
                                                    <svg class="product__tab--content__list--icon" xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M268 112l144 144-144 144M392 256H100"></path></svg>
                                                    Sit amet consectetur adipisicing elit.  Quo delectus repellat facere maiores.
                                                </li>
                                                <li class="product__tab--content__list">
                                                    <svg class="product__tab--content__list--icon" xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M268 112l144 144-144 144M392 256H100"></path></svg>
                                                    Repellendus itaque sit quia consequuntur, unde veritatis. dolorum?
                                                </li>
                                            </ul>
                                        </div>
            ',
        ];
    }
}
