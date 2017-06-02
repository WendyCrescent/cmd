@extends('layouts.default')

@section('title', 'About Me')

@section('content')

<div class="row pageElement">
  <div class="col-md-3">
    <img class="img-responsive img-rounded" src="{{ asset('img/logos/logo.png') }}" alt="PictureOfMe">
  </div>
  <div class="col-md-9">
    <div class="col-md-12 pageElement">
      <h3 class="page-header">Hi, my name is Wendy Crescent</h3>
      <p>Consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
      <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
      <p>In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.</p>
    </div>
    <div class="col-md-12 pageElement">
      <h3 class="page-header">Facts About Me</h3>
      <p>Consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
      <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
      <p>In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.</p>
    </div>
    <div class="col-md-6 pageElement">
      <h3 class="page-header">Skill Set</h3>

      <div class="progress">
        <div class="progress-bar progress-bar-purple" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
          PHP: 90%
        </div>
      </div>

      <div class="progress">
        <div class="progress-bar progress-bar-purple" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
          Laravel: 85%
        </div>
      </div>

      <div class="progress">
        <div class="progress-bar progress-bar-purple" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
          HTML/CSS: 90%
        </div>
      </div>

      <div class="progress">
        <div class="progress-bar progress-bar-purple" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
          Javascript (Jquery): 60%
        </div>
      </div>
      <hr>

    </div>
    <div class="col-md-6 pageElement">
      <div class="col-md-12 pageElement">
        <h3 class="page-header">Connect with me</h3>
        <a href="https://plus.google.com/u/0/112608160095419474570"><i class="fa fa-google-plus-square fa-4x" aria-hidden="true"></i></a> &nbsp;
        <a href="https://github.com/WendyCrescent"><i class="fa fa-github fa-4x" aria-hidden="true"></i></a> &nbsp;
        <a href="https://twitter.com/wendycrescent"><i class="fa fa-twitter-square fa-4x" aria-hidden="true"></i></a> &nbsp;
        <a href="https://www.linkedin.com/in/wendycrescent/"><i class="fa fa-linkedin-square fa-4x" aria-hidden="true"></i></a> &nbsp;
      </div>

      <div class="col-md-12 pageElement">
        <div class="clearfix"></div>
      </div>
    </div>
    </div>
</div>

@endsection

@section('scripts')

@endsection
