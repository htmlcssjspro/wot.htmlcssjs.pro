<?php

namespace Database\Seeders;

use App\Models\UserPage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserPage::factory()->create([
            'name' => 'user_profile',
            'route' => 'user/profile',
            'view' => 'user.profile',
            'meta_title' => 'Личный кабинет',
            'meta_description' => 'User Description',
            'h1' => 'Личный кабинет',
        ]);
        UserPage::factory()->create([
            'name' => 'user_buygold',
            'route' => 'user/buygold',
            'view' => 'user.buygold',
            'meta_title' => 'Купить iGold',
            'meta_description' => 'Купить iGold Description',
            'h1' => 'Купить iGold',
        ]);
        UserPage::factory()->create([
            'name' => 'user_goldconfirmation',
            'route' => 'user/goldconfirmation',
            'view' => 'user.goldconfirmation',
            'meta_title' => 'Оформление Покупки',
            'meta_description' => 'Оформление Покупки Description',
            'h1' => 'Оформление Покупки',
        ]);
    }
}
