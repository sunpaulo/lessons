<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Logistic\User as Logical;

/**
 * App\User
 *
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @mixin \Eloquent
 */
class User extends Authenticatable
{
    use Notifiable, Logical;

    const TAB_NAME = 'user';

    protected $table = self::TAB_NAME;

    const COL_NAME = 'name';
    const COL_EMAIL = 'email';
    const COL_PASSWORD = 'password';

    protected $fillable = [
        self::COL_NAME, self::COL_EMAIL, self::COL_PASSWORD
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function categories()
    {
        return $this->hasMany(Category::class, '');
    }
}
