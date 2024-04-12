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
        Schema::create("product_shop", function (Blueprint $table){
            $table->uuid('id')->primary();
            $table->foreignUuid('product_id')->references('id')->on('products');
            $table->foreignUuid('shop_id')->references('id')->on('shops');
//            $table->foreignUuid('product_id')
//                ->constrained();
//            $table->foreignUuid('shop_id')
//                ->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
