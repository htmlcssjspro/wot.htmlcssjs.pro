<?php

namespace Database\Seeders;

use App\Models\AdminPage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdminPage::factory()->create([
            'name' => 'admin_finance',
            'route' => 'admin/finance',
            'view' => 'admin.finance',
            'meta_title' => 'Finance',
            'meta_description' => 'Finance Description',
            'h1' => 'Панель администратора',
        ]);
        AdminPage::factory()->create([
            'name' => 'admin_referral',
            'route' => 'admin/referral',
            'view' => 'admin.referral',
            'meta_title' => 'Referral',
            'meta_description' => 'Referral Description',
            'h1' => 'Панель администратора',
        ]);
        AdminPage::factory()->create([
            'name' => 'admin_battles',
            'route' => 'admin/battles',
            'view' => 'admin.battles',
            'meta_title' => 'Battles',
            'meta_description' => 'Battles Description',
            'h1' => 'Панель администратора',
        ]);
    }
}
