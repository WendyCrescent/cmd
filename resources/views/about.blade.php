@extends('layouts.default')

@section('title', 'About Me')

@section('content')

<div class="row pageElement">
  <div class="col-md-3">
    <img class="img-responsive img-rounded" src="{{ asset('img/logos/logo.png') }}" alt="PictureOfMe">
  </div>
  <div class="col-md-9">
    <div class="col-md-12 pageElement">
      <h2 class="page-header">About Me</h2>
      <p>I am a graduate web development student, and I have been working in the industry for 3 years now, four years to be exact. I have spent most of my time working on e-learning solutions for a Dutch company.</p>
      <p>I am passionate about learning new things when it comes to web development and Programming. I like to keep up to date with the latest changes and eagerly try to implement them when possible!</p>
    </div>
    <div class="col-md-12 pageElement">
      <h2 class="page-header">Facts About Me</h2>
      <p>I am a very passionate person when it comes to my hobbies; I mainly enjoy reading and writing, though I am also a very passionate gamer, playing thing like Dungeons and Dragons, as well as hard games like Dark Souls.</p>
      <p>Other things I enjoy doing include playing the guitar, and writing fiction. As well as being socially active with my close friends group and lastly painting Warhammer 40,000 models.</p>
      <p>Writing is probably my primary hobby and passion, and I hope to oneday have a book published for everyone to enjoy.</p>
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
