<?php

namespace App\Models\Logistic;

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
      * @return $this
      */
    public function setSlug($value)
    {
        $this->{self::COL_SLUG} = self::createSlug($value);
        
        return $this;
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
    public function setParentId(int $value)
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
    public function setIsPublished(bool $value)
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
    public function setCreatorId(int $value)
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
    public function setModeratorId(int $value)
    {
        $this->{self::COL_MODERATOR_ID} = $value;

        return $this;
    }
    
    public static function createSlug($text)
    {
        // replace non letter or digits by - 
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);
        
        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        
        // remove unwanted characters
        $text = preg_replace('~[^-\w]+', '', $text);
        
        $text = trim($text, '-');
        
        // remove duplicate
        $text = preg_replace('~-+~', '-', $text);
        
        // lowercase
        $text = strtolower($text);
        
        if (empty($text)) {
            return 'n-a';
        }
        
        return $text;
    }
}