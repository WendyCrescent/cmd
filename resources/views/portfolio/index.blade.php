@extends('layouts.default')

@section('title', 'Portfolio')

@section('content')

<div class="panel panel-default">
  <div class="panel-body">
    <div class="row pageElement">
      <div class="col-md-12">
        <h2 class=""> Portfolio</h2>
      </div>
    </div>

    <hr>

    <div class="row pageElement">
      @if(!empty($items))
      @foreach($items as $item)
        <div class="col-sm-6 col-md-3">
          <div class="thumbnail">
            <a href="{{ route('portfolio.item', $item->slug) }}">
              <img src="{{ asset('img/' . $item->image) }}" alt="PortfolioItem">
            </a>
            <div class="caption text-center">
              <h4><a href="{{ route('portfolio.item', $item->slug) }}">{{ $item->title }}</a></h4>
              <p> {{ $item->short }} </p>
            </div>
          </div>
        </div>
      @endforeach
    @else
      <p class="text-center"> There are no portfolio items available. </p>
    @endif

    </div>

    <hr>

    <div class="row pageElement text-center">
      <div class="col-lg-12">
        <ul class="pagination">
          <li><a href="#">&laquo;</a></li>
          <li class="active"><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">&raquo;</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

@endsection

@section('scripts')

@endsection
