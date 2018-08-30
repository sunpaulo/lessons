<?php

namespace App\Models\Logistic;

trait User
{
    /**
      * @return
      */
    public function getName()
    {
        return $this->{self::COL_NAME};
    }

    /**
      * @return $this
      */
    public function setName($value)
    {
        $this->{self::COL_NAME} = trim($value);

        return $this;
    }

    /**
      * @return
      */
    public function getEmail()
    {
        return $this->{self::COL_EMAIL};
    }

    /**
      * @return $this
      */
    public function setEmail($value)
    {
        $this->{self::COL_EMAIL} = $value;

        return $this;
    }

    /**
      * @return
      */
    public function getPassword()
    {
        return $this->{self::COL_PASSWORD};
    }

    /**
      * @return $this
      */
    public function setPassword($value)
    {
        $this->{self::COL_PASSWORD} = bcrypt($value);

        return $this;
    }
}