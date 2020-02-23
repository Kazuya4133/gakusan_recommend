<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    const TYPE = [
        1 => ['label' => '???' ],
        2 => ['label' => '塾・予備校講師' ],
        3 => ['label' => '中学・高校教員' ],
        4 => ['label' => '大学教員' ],
        5 => ['label' => '社会人' ],
        6 => ['label' => '学生' ],
        7 => ['label' => 'その他' ],
    ];

    public function getTypeLabelAttribute()
    {
        $type = $this->attributes['type'];

        if (!isset(self::TYPE[$type])) {
            return '';
        }

        return self::TYPE[$type]['label'];
    }
}
