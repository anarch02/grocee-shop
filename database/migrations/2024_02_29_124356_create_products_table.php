<?php

use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('name');
            $table->decimal('price', 10, 2);
            $table->decimal('new_price', 10, 2)->nullable();
            $table->integer('stock');
            $table->boolean('active')->default(true);
            $table->text('preview')->nullable();
            $table->text('description');
            $table->timestamps();
        });

        Schema::create('product_subcategory', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Product::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignIdFor(SubCategory::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
        
        Schema::create('product_category', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Product::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignIdFor(Category::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });

        Schema::create('product_color', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Product::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignIdFor(Color::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
        Schema::dropIfExists('product_category');
        Schema::dropIfExists('product_subcategory');
        Schema::dropIfExists('product_color');
    }
};
