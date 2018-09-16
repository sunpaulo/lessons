<?php

use Faker\Generator as Faker;
use App\Models\Article;
use App\Models\User;

$factory->define(Article::class, function (Faker $faker) {
    return [
        Article::COL_TITLE => $faker->unique()->words(5, true),
        Article::COL_SLUG => $faker->unique()->slug,
        Article::COL_DESCRIPTION => $faker->text(50),
        Article::COL_DESCRIPTION_SHORT => $faker->text(20),
        Article::COL_META_TITLE => $faker->words(5, true),
        Article::COL_META_DESCRIPTION => $faker->text(10),
        Article::COL_META_KEYWORDS => $faker->words(5, true),
        Article::COL_IS_PUBLISHED => $faker->boolean(),
        Article::COL_VIEWED => $faker->numberBetween(0, 255),
        Article::COL_CREATOR_ID => User::inRandomOrder()->first(),
    ];
});
