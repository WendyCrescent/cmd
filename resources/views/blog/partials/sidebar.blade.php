@if($tags->count())
<h2 class="page-header"> Tags </h2>

@foreach($tags as $tag)
  <a href="{{ route('posts.tagged', $tag->slug) }}" class="tag"> {{ $tag->name }} </a>
@endforeach

@endif
