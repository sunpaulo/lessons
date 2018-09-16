<?php

use App\Models\Article;
use App\Models\Category;

class ArticleSeeder extends DatabaseSeeder
{
    public function run()
    {
        factory(Article::class, self::ARTICLES_COUNT)->create()->each(function (Article $article) {
            $limit = rand(0, 3);

            $categories = Category::inRandomOrder()->limit($limit)->get(['id']);
            if ($categories) {
                $article->categories()->attach($categories);
            }
        });
    }
}
