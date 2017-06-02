<?php

namespace App\Http\Controllers\Blog;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
  public function show(Post $post)
  {
    $comments = $post->nestedComments();

    return view('blog.post.post')->with([
      'post' => $post,
      'comments' => $comments,
    ]);
  }
}
