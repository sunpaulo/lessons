<?php

namespace App\Models;

use App\Models\Logistic\Article as Logical;

class Article extends AbstractModel
{
    use Logical;

    const TAB_NAME = 'article';

    protected $table = self::TAB_NAME;

    const COL_TITLE = 'title';
    const COL_SLUG = 'slug';
    const COL_DESCRIPTION_SHORT = 'description_short';
    const COL_DESCRIPTION = 'description';
    const COL_IMAGE = 'image';
    const COL_SHOW_IMAGE = 'show_image';
    const COL_META_TITLE = 'meta_title';
    const COL_META_DESCRIPTION = 'meta_description';
    const COL_META_KEYWORDS = 'meta_keywords';
    const COL_IS_PUBLISHED = 'is_published';
    const COL_VIEWED = 'viewed';
    const COL_CREATOR_ID = 'creator_id';
    const COL_MODERATOR_ID = 'moderator_id';

    protected $fillable = [self::COL_TITLE, self::COL_SLUG, self::COL_DESCRIPTION_SHORT, self::COL_DESCRIPTION, self::COL_IMAGE,
        self::COL_SHOW_IMAGE, self::COL_META_TITLE, self::COL_META_DESCRIPTION, self::COL_META_KEYWORDS, self::COL_IS_PUBLISHED,
        self::COL_CREATOR_ID, self::COL_MODERATOR_ID];

    // polymorphic relation with categories
    public function categories()
    {
        return $this->morphToMany(Category::class, 'categoryable');
    }

    public function scopeLastArticles($query, $count)
    {
        return $query->orderByDesc(self::COL_CREATED_AT)->take($count)->get();
    }
}
