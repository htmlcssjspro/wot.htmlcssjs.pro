<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::factory()->create([
            'name' => 'MILITER',
            'first_name' => 'Сергей',
            'last_name' => 'MILITER',
            'email' => 'militer@htmlcssjs.pro',
            'email_verified_at' => now(),
            'role' => 'developer',
            'active' => true,
            'password' => '$2y$10$SLBxS1Umf0IG4Vwq.R8ZwuTJFknXp2ZKduTNutXs6h/zmztMWQFey', // qwerty
        ]);
        Admin::factory()->create([
            'name' => 'Admin',
            'first_name' => 'Admin',
            'last_name' => 'Admin',
            'email' => 'admin@example.com',
            'email_verified_at' => now(),
            'role' => 'admin',
            'active' => true,
            // 'password' => '$2y$10$SLBxS1Umf0IG4Vwq.R8ZwuTJFknXp2ZKduTNutXs6h/zmztMWQFey', // qwerty
            'password' => Hash::make('qwerty'),
        ]);

    }
}
