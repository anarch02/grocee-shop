<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Address;
use App\Models\Cart;
use App\Models\Category;
use App\Models\City;
use App\Models\Color;
use App\Models\Country;
use App\Models\Order;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\User;
use App\Models\WishlistItem;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Country::factory(3)->create();
        City::factory(5)->create();
        Address::factory(50)->create();

        $categories = [
            [
                'name' => 'Fruits & Vegetables',
                'description' => 'Fruits & Vegetables',
                'icon' => '<svg class="categories__menu--svgicon" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M448 256c0-106-86-192-192-192S64 150 64 256s86 192 192 192 192-86 192-192z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M256 176v160M336 256H176"/></svg>'
            ],
            [
                'name' => 'Fresh Fruits',
                'description' => 'Fresh Fruits',
                'icon' => '<svg class="categories__menu--svgicon" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M448 256c0-106-86-192-192-192S64 150 64 256s86 192 192 192 192-86 192-192z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M256 176v160M336 256H176"/></svg>'
            ],
            [
                'name' => 'Vegetables',
                'description' => 'Vegetables',
                'icon' => '<svg class="categories__menu--svgicon" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M215.08 156.92c-4.89-24-10.77-56.27-10.77-73.23A51.36 51.36 0 01256 32h0c28.55 0 51.69 23.69 51.69 51.69 0 16.5-5.85 48.95-10.77 73.23M215.08 355.08c-4.91 24.06-10.77 56.16-10.77 73.23A51.36 51.36 0 00256 480h0c28.55 0 51.69-23.69 51.69-51.69 0-16.54-5.85-48.93-10.77-73.23M355.08 215.08c24.06-4.91 56.16-10.77 73.23-10.77A51.36 51.36 0 01480 256h0c0 28.55-23.69 51.69-51.69 51.69-16.5 0-48.95-5.85-73.23-10.77M156.92 215.07c-24-4.89-56.25-10.76-73.23-10.76A51.36 51.36 0 0032 256h0c0 28.55 23.69 51.69 51.69 51.69 16.5 0 48.95-5.85 73.23-10.77" fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32"/><path d="M296.92 156.92c13.55-20.48 32.3-47.25 44.37-59.31a51.35 51.35 0 0173.1 0h0c20.19 20.19 19.8 53.3 0 73.1-11.66 11.67-38.67 30.67-59.31 44.37M156.92 296.92c-20.48 13.55-47.25 32.3-59.31 44.37a51.35 51.35 0 000 73.1h0c20.19 20.19 53.3 19.8 73.1 0 11.67-11.66 30.67-38.67 44.37-59.31M355.08 296.92c20.48 13.55 47.25 32.3 59.31 44.37a51.35 51.35 0 010 73.1h0c-20.19 20.19-53.3 19.8-73.1 0-11.69-11.69-30.66-38.65-44.37-59.31M215.08 156.92c-13.53-20.43-32.38-47.32-44.37-59.31a51.35 51.35 0 00-73.1 0h0c-20.19 20.19-19.8 53.3 0 73.1 11.61 11.61 38.7 30.68 59.31 44.37" fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32"/><circle cx="256" cy="256" r="64" fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32"/></svg> '
            ],
            [
                'name' => 'Organics',
                'description' => 'Organics',
                'icon' => '<svg class="categories__menu--svgicon" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M408 64H104a56.16 56.16 0 00-56 56v192a56.16 56.16 0 0056 56h40v80l93.72-78.14a8 8 0 015.13-1.86H408a56.16 56.16 0 0056-56V120a56.16 56.16 0 00-56-56z" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/></svg> '
            ],
            [
                'name' => 'Beauty & Care',
                'description' => 'Beauty & Care',
                'icon' => '<svg class="categories__menu--svgicon" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><circle cx="256" cy="184" r="120" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/><circle cx="344" cy="328" r="120" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/><circle cx="168" cy="328" r="120" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/></svg>'
            ],
            [
                'name' => 'Fresh Fish',
                'description' => 'Fresh Fish',
                'icon' => '<svg class="categories__menu--svgicon" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-width="32" stroke-linejoin="round" d="M240 152c-50.71 12.21-94.15 52.31-120.3 73.43a261.14 261.14 0 00-23.81-19.58C59.53 179.29 16 176 16 176s11.37 51.53 41.36 79.83C27.37 284.14 16 335.67 16 335.67s43.53-3.29 79.89-29.85a259.18 259.18 0 0023.61-19.41c26.1 21.14 69.74 61.34 120.5 73.59l-16 56c39.43-6.67 78.86-35.51 94.72-48.25C448 362 496 279 496 256c0-22-48-106-176.89-111.73C303.52 131.78 263.76 102.72 224 96z"/><circle cx="416" cy="239.99" r="16"/><path fill="none" stroke="currentColor" stroke-width="32" stroke-linecap="round" stroke-miterlimit="20" d="M378.37 356a199.22 199.22 0 010-200"/></svg>'
            ],
            [
                'name' => 'Nature',
                'description' => 'Nature',
                'icon' => '<svg class="categories__menu--svgicon" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M321.89 171.42C233 114 141 155.22 56 65.22c-19.8-21-8.3 235.5 98.1 332.7 77.79 71 197.9 63.08 238.4-5.92s18.28-163.17-70.61-220.58zM173 253c86 81 175 129 292 147" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>'
            ],
            [
                'name' => 'Fresh Berries',
                'description' => 'Fresh Berries',
                'icon' => '<svg class="categories__menu--svgicon" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><circle cx="256" cy="184" r="120" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/><circle cx="344" cy="328" r="120" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/><circle cx="168" cy="328" r="120" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/></svg>'
            ],
            [
                'name' => 'Bread & Bakery',
                'description' => 'Bread & Bakery',
                'icon' => '<svg class="categories__menu--svgicon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M322 416c0 35.35-20.65 64-56 64H134c-35.35 0-56-28.65-56-64M336 336c17.67 0 32 17.91 32 40h0c0 22.09-14.33 40-32 40H64c-17.67 0-32-17.91-32-40h0c0-22.09 14.33-40 32-40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32"/><path d="M344 336H179.31a8 8 0 00-5.65 2.34l-26.83 26.83a4 4 0 01-5.66 0l-26.83-26.83a8 8 0 00-5.65-2.34H56a24 24 0 01-24-24h0a24 24 0 0124-24h288a24 24 0 0124 24h0a24 24 0 01-24 24zM64 276v-.22c0-55 45-83.78 100-83.78h72c55 0 100 29 100 84v-.22M241 112l7.44 63.97" fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32"/><path d="M256 480h139.31a32 32 0 0031.91-29.61L463 112" fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M368 112l16-64 47-16"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M224 112h256"/></svg>'
            ],
        ];

        $sub_categories = [
            [
                'category_id'=> 2,
                'name' => 'Fresh Berries',
                'description' => 'Fresh Berries',
            ],
            [
                'category_id'=> 2,
                'name' => 'Orange Juice',
                'description' => 'Orange Juice',
            ],
            [
                'category_id'=> 2,
                'name' => 'Fresh Nuts',
                'description' => 'Fresh Nuts',
            ],
            [
                'category_id'=> 2,
                'name' => 'Laura Mercier',
                'description' => 'Laura Mercier',
            ],
            [
                'category_id' => 4,
                'name' => 'Hot Offers',
                'description' => 'Hot Offers',
            ],
            [
                'category_id' => 4,
                'name' => 'Fresh Meat',
                'description' => 'Fresh Meat',
            ],
            [
                'category_id' => 4,
                'name' => 'Nature Food',
                'description' => 'Nature Food',
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }

        foreach ($sub_categories as $sub_category) {
            SubCategory::create($sub_category);
        }

        Product::factory(40)->create();
        Color::factory(10)->create();

        $products = Product::all();
        $categories = Category::all();
        $sub_categories = SubCategory::all();
        $colors = Color::all();

        foreach ($products as $product) {
            $product->category()->attach($categories->random(1));
            $product->colors()->attach($colors->random(4));
        }

        
        foreach ($products as $product) {
            if(isset($product->category->subcategories))
            {
                $product->subcategory()->attach($product->category->subcategories->random(1));
            }
        }

        Cart::factory(30)->create();
        WishlistItem::factory(20)->create();
        Order::factory(10)->create();

        $orders = Order::all();

        foreach($orders as $order) {

            $address = Address::where('user_id', $order->user_id)->first();
            $carts = Cart::where('user_id', $order->user_id)->get();

            $totalCost = 0;
            $itemCount = 0;

            $shippingAddress = $address->address . ', ' . $address->city->name . ', ' . $address->city->country->name . ', ' . $address->zip_code;

            foreach($carts as $cart) {
                $totalCost += $cart->total;
                $itemCount += $cart->quantity;
            }

            $order->update([
                'shipping_address' => $shippingAddress,
                'total_price' => $totalCost,
                'item_count' => $itemCount
            ]);
            
            $order->cart()->attach($carts);

        }

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
