<?php

namespace App\Models;

use App\Traits\Orderable;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use Orderable;

    public function getRouteKeyName()
    {
      return 'slug';
    }
}
