<?php

namespace Database\Seeders;

use App\Models\Role;
use http\Client\Curl\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Créer les roles manuellement au lieu de factory
        Role::factory()
            ->count(1)
            ->create();
    }
}
