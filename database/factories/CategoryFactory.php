<?php

use Faker\Generator as Faker;
use App\Models\Category;
use App\Models\User;

$factory->define(Category::class, function (Faker $faker) {
    return [
        Category::COL_TITLE => $faker->unique()->word,
        Category::COL_CREATOR_ID => User::inRandomOrder()->first(),
        Category::COL_IS_PUBLISHED => $faker->boolean(),
        Category::COL_SLUG => $faker->unique()->slug()
    ];
});
