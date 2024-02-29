<?php

use App\Models\Cart;
use App\Models\Order;
use App\Models\User;
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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->enum('status', ['pending', 'processing', 'completed', 'declined', 'canceled'])->default('pending');
            $table->string('payment_method')->nullable();
            $table->string('payment_status')->default('false');
            $table->integer('item_count')->default(0);
            $table->string('shipping_address')->nullable();
            $table->decimal('total_price', 8, 2)->default(0);
            $table->timestamps();
        });

        Schema::create('order_cart', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Order::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(Cart::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
