<?php

use Faker\Generator as Faker;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        User::COL_NAME => $faker->name,
        User::COL_EMAIL => $faker->email,
        User::COL_PASSWORD => bcrypt('secret'),
    ];
});
