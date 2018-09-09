<?php

namespace App\Models\Logistic;

use Carbon\Carbon;
use Illuminate\Support\Str;

trait Article
{
    /**
     * @return
     */
    public function getTitle()
    {
        return $this->{self::COL_TITLE};
    }
    
    /**
     * @return $this
     */
    public function setTitle($value)
    {
        $this->{self::COL_TITLE} = $value;
    }
    
    /**
     * @return
     */
    public function getDescriptionShort()
    {
        return $this->{self::COL_DESCRIPTION_SHORT};
    }
    
    /**
     * @return $this
     */
    public function setDescriptionShort($value)
    {
        $this->{self::COL_DESCRIPTION_SHORT} = $value;
    }
    
    /**
     * @return
     */
    public function getDescription()
    {
        return $this->{self::COL_DESCRIPTION};
    }
    
    /**
     * @return $this
     */
    public function setDescription($value)
    {
        $this->{self::COL_DESCRIPTION} = $value;
    }
    
    /**
     * @return
     */
    public function getImage()
    {
        return $this->{self::COL_IMAGE};
    }
    
    /**
     * @return $this
     */
    public function setImage($value)
    {
        $this->{self::COL_IMAGE} = $value;
    }
    
    /**
     * @return
     */
    public function getShowImage()
    {
        return $this->{self::COL_SHOW_IMAGE};
    }
    
    /**
     * @return $this
     */
    public function setShowImage($value)
    {
        $this->{self::COL_SHOW_IMAGE} = $value;
    }
    
    /**
     * @return
     */
    public function getMetaTitle()
    {
        return $this->{self::COL_META_TITLE};
    }
    
    /**
     * @return $this
     */
    public function setMetaTitle($value)
    {
        $this->{self::COL_META_TITLE} = $value;
    }
    
    /**
     * @return
     */
    public function getMetaDescription()
    {
        return $this->{self::COL_META_DESCRIPTION};
    }
    
    /**
     * @return $this
     */
    public function setMetaDescription($value)
    {
        $this->{self::COL_META_DESCRIPTION} = $value;
    }
    
    /**
     * @return
     */
    public function getMetaKeywords()
    {
        return $this->{self::COL_META_KEYWORDS};
    }
    
    /**
     * @return $this
     */
    public function setMetaKeywords($value)
    {
        $this->{self::COL_META_KEYWORDS} = $value;
    }
    
    /**
     * @return
     */
    public function getIsPublished()
    {
        return $this->{self::COL_IS_PUBLISHED};
    }
    
    /**
     * @return $this
     */
    public function setIsPublished($value)
    {
        $this->{self::COL_IS_PUBLISHED} = $value;
    }
    
    /**
     * @return
     */
    public function getViewed()
    {
        return $this->{self::COL_VIEWED};
    }
    
    /**
     * @return $this
     */
    public function setViewed($value)
    {
        $this->{self::COL_VIEWED} = $value;
    }
    
    /**
     * @return
     */
    public function getCreatorId()
    {
        return $this->{self::COL_CREATOR_ID};
    }
    
    /**
     * @return $this
     */
    public function setCreatorId($value)
    {
        $this->{self::COL_CREATOR_ID} = $value;
    }
    
    /**
     * @return
     */
    public function getModeratorId()
    {
        return $this->{self::COL_MODERATOR_ID};
    }

    
    /***
     * @return $this
     */
    public function setModeratorId($value)
    {
        $this->{self::COL_MODERATOR_ID} = $value;
    }

    /***
     * @return 
     */
    public function getSlug()
    {
        return $this->{self::COL_SLUG};
    }

    public function setSlugAttribute()
    {
        $this->attributes[self::COL_SLUG] = Str::slug(mb_substr($this->{self::COL_TITLE}, 0, 40) . '-' . Carbon::now()
                ->format('dmyHi'), '-');
    }
}