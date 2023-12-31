<?php

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
        Schema::create('product_cart', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('cart_id');
            $table->tinyInteger('amount');
            $table->float('total_price');
            $table->timestamps();

            $table
                ->foreign('product_id')
                ->references('id')
                ->on('products')
                ->cascadeOnDelete();

            $table
                ->foreign('cart_id')
                ->references('id')
                ->on('carts')
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_cart');
    }
};
