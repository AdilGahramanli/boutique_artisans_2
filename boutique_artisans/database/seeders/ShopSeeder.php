<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\shop;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        shop::factory()
            ->count(3)
            ->has(Product::factory()->count(3))
            ->create();

    }
}
