<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        // 1. Creación de usuario
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // 2. Aquí agregas la llamada de seeder NavbarLinksSeeder
        $this->call(NavbarLinksSeeder::class);

        // 3. Aquí agregas la llamada del seeder FooterContentSeeder
        $this->call(FooterContentSeeder::class);

    }
}
