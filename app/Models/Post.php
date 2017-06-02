<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Eloquent\NestableCommentsTrait;

class Post extends Model
{
  use NestableCommentsTrait;

  public function getRouteKeyName()
  {
    return 'slug';
  }

  public function scopeLatestFirst($query)
  {
    return $query->orderBy('created_at', 'desc');
  }

  public function scopeIsLive($query)
  {
    return $query->where('live', true);
  }

  public function author()
  {
    return $this->belongsTo(Author::class);
  }

  public function tags()
  {
    return $this->morphToMany(Tag::class, 'taggable');
  }

  public function comments()
  {
    return $this->morphMany(Comment::class, 'commentable');
  }
}
