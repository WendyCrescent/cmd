@extends('layouts.default')

@section('title', 'Home')

@section('pre')
@endsection

@section('content')
<div class="row pageElement">
  <div class="col-lg-12">

    <div class="media">
      <div class="media-left">
        <a>
          <img class="media-object img-circle" src="{{ asset('img/logos/logo.png') }}" height="150" alt="PictureOfMe">
        </a>
      </div>
      <div class="media-body">
        <h2 class="media-heading">Welcome to my Portfolio!</h2>
        <p>I am a graduate web development student, and I have been working in the industry for 3 years now, four years to be exact. I have spent most of my time working on e-learning solutions for a Dutch company.</p>
        <p>I am passionate about learning new things when it comes to web development and Programming. I like to keep up to date with the latest changes and eagerly try to implement them when possible!</p>
        <p>I am a very passionate person when it comes to my hobbies; I mainly enjoy reading and writing.</p>
      </div>
    </div>

  </div>
</div>

<div class="row pageElement">
  <div class="col-lg-12">
      <h2 class="page-header">Recent additions to my Portfolio</h2>
  </div>
  @if(!empty($items))
    @foreach($items as $item)
      <div class="col-md-4 col-sm-6">
          <div class="PortfolioItem">
              <a href="{{ route('portfolio.item', $item->slug) }}">
                  <img class="img-responsive img-portfolio img-hover" src="{{ asset('img/' . $item->image) }}" alt="">
                  <h4 class="ImageCaption text-center"> {{ $item->title }} </h4>
              </a>
          </div>
      </div>
    @endforeach
  @else
    <div class="col-md-12 text-center">
      <p> There are no items available. </p>
    </div>
  @endif
</div>

@if(!empty($feature))
  <div class="row pageElement">
    <div class="col-lg-12">
        <h2 class="page-header">{{ $feature->title }}</h2>
    </div>
    <div class="col-md-6">
      {!! $feature->description !!}
      <hr>
      <a href="{{ $feature->link }}" class="btn btn-purple btn-block" target="_blank"> View this Project on Github &nbsp; <i class="fa fa-share" aria-hidden="true"></i></a>
    </div>
    <div class="col-md-6">
        <img class="img-responsive" src="{{ asset('img/' . $feature->image) }}" alt="{{ $feature->title }} Image">
    </div>
  </div>
@endif
@endsection

@section('scripts')

@endsection
