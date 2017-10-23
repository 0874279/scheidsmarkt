<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Ref extends Authenticatable
{
    use Notifiable;

    protected $guard = 'ref';

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    protected $fillable = [
        'name', 'email', 'password', 'address', 'housenumber', 'housenumberadd', 'zip', 'city', 'phone',
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];
}
