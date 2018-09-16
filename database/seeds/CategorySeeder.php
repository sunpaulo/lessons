<?php

use App\Models\Category;

class CategorySeeder extends DatabaseSeeder
{
    public function run()
    {
        factory(Category::class, self::CATEGORIES_COUNT)->create();
    }
}
