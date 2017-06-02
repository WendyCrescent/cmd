<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use HttpOz\Roles\Traits\HasRole;
use HttpOz\Roles\Contracts\HasRole as HasRoleContract;

class Author extends Authenticatable implements HasRoleContract
{
    use Notifiable, HasRole;

    protected $fillable = [
        'name',
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
      return 'https://gravatar.com/avatar/' . md5($this->email) . '?s=60&d=mm';
    }

    public function posts()
    {
      $this->hasMany(Post::class, 'author_id');
    }

    Public function profile()
    {
      return $this->hasOne(Profile::Class);
    }
}
