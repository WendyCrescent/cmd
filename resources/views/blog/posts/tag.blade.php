@extends('layouts.default')

@section('title', 'Tag')

@section('content')
<div class="row">
  <div class="col-md-7">
    <h3> Tagged in: {{ $tag->name }}</h3>
    @include('blog.posts.partials.list', [
      'posts' => $posts
    ])
  </div>
  <div class="col-md-4 col-md-offset-1">
    @include('blog.partials.sidebar')
  </div>
</div>
@endsection
