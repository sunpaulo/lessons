<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    const USERS_COUNT = 30;
    const CATEGORIES_COUNT = 25;
    const ARTICLES_COUNT = 30;

    public function run()
    {
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            ArticleSeeder::class,
        ]);
    }
}
