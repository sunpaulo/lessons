<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends AbstractModel
{
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
}
