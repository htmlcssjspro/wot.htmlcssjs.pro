<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PageSeeder::class,

            AdminSeeder::class,
            AdminPageSeeder::class,

            UserSeeder::class,
            UserPageSeeder::class,
            BalanceSeeder::class,

            CompetitionSeeder::class,
            PostSeeder::class,
            // CommentSeeder::class,
            NewsSeeder::class,

            TestSeeder::class,
        ]);
    }
}
