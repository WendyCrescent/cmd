@extends('layouts.default')

@section('title', 'Commissions')

@section('content')
<div class="row pageElement">
  <div class="col-md-12">
    <h1 class="page-header">Commissions: <small class="text-danger"> Closed</small></h1>
  </div>
</div>

<div class="row pageElement">
  <div class="col-md-8">
    <div class="col-md-7">

  </div>
  <div class="col-md-5">

  </div>
  </div>
  <div class="col-md-4">
    @include('commissions.shared.sidebar')
  </div>
</div>
@endsection

@section('scripts')

@endsection
