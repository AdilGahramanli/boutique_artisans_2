<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Shop;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        //User factory has a shop factory which has a Product factory and we create all.

        $this->call([
            UserSeeder::class,
            ShopSeeder::class,
            ProductSeeder::class,

        ]);

    }
}
