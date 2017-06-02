@extends('layouts.default')

@section('title', 'Home')

@section('pre')
@endsection

@section('content')
<div class="row pageElement">
  <div class="col-lg-12">

    <div class="media">
      <div class="media-left">
        <a href="{{ route('about') }}">
          <img class="media-object img-circle" src="{{ asset('img/logos/logo.png') }}" height="150" alt="PictureOfMe">
        </a>
      </div>
      <div class="media-body">
        <h2 class="media-heading">Lorem ipsum dolor sit amet.</h2>
        <p>Consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
        <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
        <p>In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.</p>
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
