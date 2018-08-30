<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AbstractModel extends Model
{
    const PRIMARY_KEY = 'id';
    const COL_CREATED_AT = 'created_at';
    const COL_UPDATED_AT = 'updated_at';

    protected function getId()
    {
        return $this->{self::PRIMARY_KEY};
    }

    protected function getCreatedAt()
    {
        return $this->{self::COL_CREATED_AT};
    }

    protected function getUpdatedAt()
    {
        return $this->{self::COL_UPDATED_AT};
    }
}