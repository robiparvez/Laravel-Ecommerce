<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';

    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $fillable = [
        'name', 'email', 'password', 'admin',
    ];

    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    public function setAuthPassword() //changed from getAuthPassword()
    {
        $this->password;
    }

    public function getRemainderEmail()
    {
        return $this->email;
    }
}
