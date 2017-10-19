<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Ref extends Authenticatable
{
    use Notifiable;

    protected $guard = 'ref';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    protected $fillable = [
        'name', 'email', 'password', 'address', 'housenumber', 'housenumberadd', 'zip', 'city', 'phone',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
