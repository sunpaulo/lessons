<?php

use App\Models\User;

class UserSeeder extends DatabaseSeeder
{
    public function run()
    {
        factory(User::class, self::USERS_COUNT)->create();
    }
}
