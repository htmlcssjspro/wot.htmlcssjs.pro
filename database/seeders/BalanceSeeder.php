<?php

namespace Database\Seeders;

use App\Models\Balance;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BalanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Balance::factory()->create([
            'user_nickname' => 'MILITER_S',
            'total' => 5000,
            'own' => 3000,
            'bonus' => 2000,
        ]);
    }
}
