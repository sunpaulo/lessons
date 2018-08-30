<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\User;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable(User::TAB_NAME)) return;
        Schema::create(User::TAB_NAME, function (Blueprint $table) {
            $table->increments('id');
            $table->string(User::COL_NAME);
            $table->string(User::COL_EMAIL)->unique();
            $table->string(User::COL_PASSWORD);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(User::TAB_NAME);
    }
}
