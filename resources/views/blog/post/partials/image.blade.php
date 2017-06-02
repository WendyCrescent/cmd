

<div class="image-header">
  @if($url)
    <img src="{{ asset('img/posts/' . $url) }}" alt="{{ $alt or '' }}" class="image-header__image">
  @else
    <img src="{{ asset('img/jumbo/header.jpg') }}" alt="{{ $alt or '' }}" class="image-header__image">
  @endif
</div>
