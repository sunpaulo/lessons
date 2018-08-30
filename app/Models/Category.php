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
}
