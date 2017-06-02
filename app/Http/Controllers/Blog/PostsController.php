<?php

namespace App\Http\Controllers\Blog;

use App\Models\{Post,Tag};
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
  public function index(Post $post)
  {
    return view('blog.welcome')->with([
      'posts' => $post->isLive()->LatestFirst()->get(),
    ]);
  }

  public function tagged(Tag $tag)
  {
    return view('blog.posts.tag')->with([
      'posts' => $tag->posts()->isLive()->LatestFirst()->get(),
      'tag' => $tag,
    ]);
  }
}
