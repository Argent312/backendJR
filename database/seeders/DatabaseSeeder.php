<?php

namespace Database\Seeders;

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

        User::factory()->create([
            'name' => 'Test User',
            'last_name' => 'Last Name',
            'second_last_name' => 'Second',
            'email' => 'test@outlook.es',
            'password' => bcrypt('holamundo1234')
        ]);
    }
}
