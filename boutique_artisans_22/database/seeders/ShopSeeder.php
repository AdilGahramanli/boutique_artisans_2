<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\shop;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::all()->first();

        Shop::factory()
            ->count(3)
            ->recycle($user)
            ->create();

    }
}
