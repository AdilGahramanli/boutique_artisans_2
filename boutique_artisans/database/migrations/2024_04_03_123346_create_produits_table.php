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
        Schema::create('produits', function (Blueprint $table) {
            $table->uuid('products_uuid')->primary();
            $table->char('name', length:45);
            $table->integer('price');
            $table->integer('weight');
            $table->char('material', length:45);
            $table->char('description', length:250);
            $table->char('image_url', length:250);
            $table->integer('stock');
            $table->char('category', length:50);
            $table->foreignUuid('shop_uuid')->constrained();
            $table->timestamps();
            $table->foreignId('user_id')->constrained();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits');
    }
};
