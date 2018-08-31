<?php

namespace App\Models\Logistic;
use Carbon\Carbon;
use Illuminate\Support\Str;

trait Category
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
        $this->{self::COL_TITLE} = trim($value);
        
        return $this;
    }
    
    /**
      * @return
      */
    public function getSlug()
    {
        return $this->{self::COL_SLUG};
    }

    /**
     * 
     */
    public function setSlugAttribute()
    {
        $this->attributes[self::COL_SLUG] = Str::slug(mb_substr($this->{self::COL_TITLE}, 0, 40) . '-' . Carbon::now()
                ->format('dmyHi'), '-');
    }
    
    /**
      * @return
      */
    public function getParentId()
    {
        return $this->{self::COL_PARENT_ID};
    }
    
    /**
      * @return $this
      */
    public function setParentId($value)
    {
        $this->{self::COL_PARENT_ID} = $value;
        
        return $this;
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
        
        return $this;
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

        return $this;
    }

    /**
      * @return
      */
    public function getModeratorId()
    {
        return $this->{self::COL_MODERATOR_ID};
    }

    /**
      * @return $this
      */
    public function setModeratorId($value)
    {
        $this->{self::COL_MODERATOR_ID} = $value;

        return $this;
    }
}