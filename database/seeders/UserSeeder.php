<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'nickname' => 'MILITER_S',
            'account_id' => '4092159',
            'access_token' => '51d34bcac16ef00fddf95301bc3f8cdec14729e9',
            'expires_at' => '1657285942',

            'name' => 'MILITER',
            'first_name' => 'Сергей',
            'last_name' => 'MILITER',
            'email' => 'militer@htmlcssjs.pro',
            'active' => true,

            // 'balance_total', 'balance_own', 'balance_bonus',
            'password' => '$2y$10$SLBxS1Umf0IG4Vwq.R8ZwuTJFknXp2ZKduTNutXs6h/zmztMWQFey', // qwerty,
        ]);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
