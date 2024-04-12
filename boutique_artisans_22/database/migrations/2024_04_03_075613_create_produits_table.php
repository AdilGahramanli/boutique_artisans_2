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
            $table->uuid('id')->primary();
            $table->char('name', length:45);
            $table->integer('price');
            $table->integer('weight');
            $table->char('material', length:45);
            $table->char('description', length:250);
            $table->char('image_url', length:250);
            $table->integer('stock');
            $table->char('category', length:50);
            //This method call creates a foreign key column named 'shop_id' in the current table and specifies
            // that the 'shop_id' column references the 'id' column in another table. It means that 'shop_id' is a foreign key that
            // points to the 'id' column of the referenced table.
            $table->foreignUuid('shop_id')->references('id')->on('shops');
            $table->timestamps();
            #$table->foreignId('user_id')->constrained();

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
