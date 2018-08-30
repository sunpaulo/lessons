<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\Category;
use App\Models\User;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable(Category::TAB_NAME)) return;
        Schema::create(Category::TAB_NAME, function (Blueprint $table) {
            $table->increments(Category::PRIMARY_KEY);
            $table->string(Category::COL_TITLE);
            $table->string(Category::COL_SLUG)->unique();
            $table->integer(Category::COL_PARENT_ID)->nullable();
            $table->boolean(Category::COL_IS_PUBLISHED)->default(true);
            $table->integer(Category::COL_CREATOR_ID)->nullable();
            $table->integer(Category::COL_MODERATOR_ID)->nullable();
            $table->timestamps();

            $table->index([Category::COL_CREATOR_ID], 'fk_category_creator_idx');
            $table->index([Category::COL_MODERATOR_ID], 'fk_category_moderator_idx');

            $table->foreign(Category::COL_CREATOR_ID, 'fk_category_creator_idx')
                ->references('id')->on(User::TAB_NAME)
                ->onDelete('cascade')
                ->onUpdate('no action');

            $table->foreign(Category::COL_MODERATOR_ID, 'fk_category_moderator_idx')
                ->references('id')->on(User::TAB_NAME)
                ->onDelete('cascade')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(Category::TAB_NAME);
    }
}
