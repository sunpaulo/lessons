<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\Article;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Article::TAB_NAME, function (Blueprint $table) {
            $table->increments(Article::PRIMARY_KEY);
            $table->string(Article::COL_TITLE);
            $table->string(Article::COL_SLUG)->unique();
            $table->text(Article::COL_DESCRIPTION_SHORT)->nullable();
            $table->text(Article::COL_DESCRIPTION);
            $table->string(Article::COL_IMAGE);
            $table->boolean(Article::COL_SHOW_IMAGE)->default(true);
            $table->string(Article::COL_META_TITLE)->nullable();
            $table->string(Article::COL_META_DESCRIPTION)->nullable();
            $table->string(Article::COL_META_KEYWORDS)->nullable();
            $table->boolean(Article::COL_IS_PUBLISHED)->default(true);
            $table->integer(Article::COL_VIEWED)->default(0);
            $table->integer(Article::COL_CREATOR_ID);
            $table->integer(Article::COL_MODERATOR_ID)->nullable();
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
        Schema::dropIfExists(Article::TAB_NAME);
    }
}
