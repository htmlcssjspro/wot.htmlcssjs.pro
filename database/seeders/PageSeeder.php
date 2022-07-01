<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::factory()->create([
            'name' => 'home',
            'route' => 'home',
            'view' => 'home.index',
            'meta_title' => 'Home Page',
            'meta_description' => 'Home Page Description',
            'h1' => 'Заголовок Домашней страницы',
        ]);
        Page::factory()->create([
            'name' => 'raiting',
            'route' => 'raiting',
            'view' => 'raiting.index',
            'meta_title' => 'Raiting',
            'meta_description' => 'Raiting Description',
            'h1' => 'Рейтинг игроков',
        ]);

        Page::factory()->create([
            'name' => 'instructions',
            'route' => 'instructions',
            'view' => 'instructions.index',
            'meta_title' => 'Instructions',
            'meta_description' => 'Instructions Description',
            'h1' => 'Инструкции для игроков',
        ]);

        Page::factory()->create([
            'name' => 'faq',
            'route' => 'faq',
            'view' => 'faq.index',
            'meta_title' => 'FAQ',
            'meta_description' => 'FAQ Description',
            'h1' => 'Часто задаваемые вопросы',
        ]);

        Page::factory()->create([
            'name' => 'referral',
            'route' => 'referral',
            'view' => 'referral.index',
            'meta_title' => 'Referral',
            'meta_description' => 'Referral Description',
            'h1' => 'Реферальная программа',
        ]);
        Page::factory()->create([
            'name' => 'referral_player',
            'route' => 'referral/player',
            'view' => 'referral.player',
            'meta_title' => 'Referral',
            'meta_description' => 'Referral Description',
            'h1' => 'Реферальная программа для игроков',
        ]);
        Page::factory()->create([
            'name' => 'referral_developer',
            'route' => 'referral/developer',
            'view' => 'referral.developer',
            'meta_title' => 'Referral',
            'meta_description' => 'Referral Description',
            'h1' => 'Реферальная программа для вебмастеров',
        ]);
    }
}
