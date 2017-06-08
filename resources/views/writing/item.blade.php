@extends('layouts.default')

@section('title', $item->title)

@section('content')
<div class="row pageElement">
  <div class="col-md-12">
    <h2 class="page-header"> {{ $item->title }} </h2>
  </div>
</div>

<div class="row pageElement">

    <div class="col-md-7">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    <img class="img-responsive" src="{{ asset('img/writing/' . $item->image) }}" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-5">
        {!! Markdown::convertToHtml(e($item->description)) !!}
        <hr>
        <a href="{{ $item->link }}" class="btn btn-purple btn-block" target="_blank"> Read the full story &nbsp; <i class="fa fa-share" aria-hidden="true"></i></a>
    </div>

</div>

<div class="row pageElement hidden">
  <div class="col-lg-12">
    <h3 class="page-header">Related Stories</h3>
  </div>
  <div class="col-sm-3 col-xs-6">
    <a href="#">
      <img class="img-responsive img-hover img-related" src="https://placehold.it/500x300" alt="">
    </a>
  </div>
  <div class="col-lg-12 hidden">
    <h4 class="text-center">No Related stories available</h4>
  </div>
</div>

@endsection

@section('scripts')

@endsection
