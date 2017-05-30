<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Client extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'firstname',
        'lastname',
        'username',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function avatar()
    {
      return 'https://gravatar.com/avatar/' . md5($this->email) . '?s=65&d=mm';
    }

    public function getName()
    {
        if ($this->firstname && $this->lastname) {
            return "{$this->firstname} {$this->lastname}";
        }

        if ($this->first_name) {
            return $this->firstname;
        }

        return null;
    }

    public function getNameOrUsername()
    {
        return $this->getName() ?: $this->username;
    }

    public function getFirstNameOrUsername()
    {
        return $this->firstname ?: $this->username;
    }

    public function getRouteKeyName()
    {
      return 'username';
    }
}
