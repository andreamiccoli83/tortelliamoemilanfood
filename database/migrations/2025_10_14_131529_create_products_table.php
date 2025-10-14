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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->decimal('price', 8, 2); // Max 999999.99
            $table->string('image')->nullable();
            $table->string('stripe_payment_link')->nullable();
            $table->boolean('is_active')->default(true);
            $table->boolean('stock_available')->default(true);
            $table->integer('sort_order')->default(0); // Per ordinare i prodotti
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
