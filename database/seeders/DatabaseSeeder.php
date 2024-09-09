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
            'name' => 'Administrator',
            'email' => 'admin@mail.com',
            'username' => 'admin',
            'role' => 'Admin',
            'password' => bcrypt('admin'),
        ]);
        User::factory()->create([
            'name' => 'Cintia Maharani',
            'email' => 'coba_ibu@mail.com',
            'username' => 'coba_ibu',
            'role' => 'Member',
            'password' => bcrypt(1234),
        ]);
    }
}
