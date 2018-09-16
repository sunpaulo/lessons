<?php

namespace App\Models;

use App\Models\Logistic\Category as Logical;

class Category extends AbstractModel
{
    use Logical;

    const TAB_NAME = 'category';

    protected $table = self::TAB_NAME;

    const COL_TITLE = 'title';
    const COL_SLUG = 'slug';
    const COL_PARENT_ID = 'parent_id';
    const COL_IS_PUBLISHED = 'published';
    const COL_CREATOR_ID = 'creator_id';
    const COL_MODERATOR_ID = 'moderator_id';

    protected $fillable = [self::COL_TITLE, self::COL_SLUG, self::COL_PARENT_ID,
        self::COL_IS_PUBLISHED, self::COL_CREATOR_ID, self::COL_MODERATOR_ID];

    /**
     * return children of category
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function children()
    {
        return $this->hasMany(self::class, self::COL_PARENT_ID);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function creator()
    {
        return $this->belongsTo(User::class, self::COL_CREATOR_ID);
    }

    // polymorphic relation with articles
    public function articles()
    {
        return $this->morphedByMany(Article::class, 'categoryable');
    }

    public function scopeLastCategories($query, $count)
    {
        return $query->orderByDesc(self::COL_CREATED_AT)->take($count)->get();
    }
}
