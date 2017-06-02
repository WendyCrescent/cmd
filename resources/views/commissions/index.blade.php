@extends('front.layouts.default')

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
    <form accept-charset="UTF-8" role="form" method="post" action="{{ route('commissions.post') }}">
      <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
        <label for="type">Select a commission type:</label>
        <select id="type" name="type" class="form-control">
          <option value=""> --- Choose ---</option>
          <option value="web">Webdesign</option>
          <option value="writing">Writing</option>
        </select>
        @if ($errors->has('type'))
            <span class="help-block">{{ $errors->first('type') }}</span>
        @endif
      </div>
      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <label for="name">Please provide your full name or company:</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="John Doe / Example B.V." value="{{ Request::old('name') ?: '' }}">
        @if ($errors->has('name'))
            <span class="help-block">{{ $errors->first('name') }}</span>
        @endif
      </div>
      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label for="email">Please provide an email:</label>
        <input type="text" class="form-control" name="email" id="email" placeholder="example@example.com" value="{{ Request::old('email') ?: '' }}">
        @if ($errors->has('email'))
            <span class="help-block">{{ $errors->first('email') }}</span>
        @endif
      </div>
      <div class="form-group{{ $errors->has('buget') ? ' has-error' : '' }}">
        <label for="buget">Please give a rough estimate of your buget: (Optional)</label>
        <div class="input-group">
          <div class="input-group-addon">$</div>
          <input type="text" class="form-control" id="buget" name="buget" placeholder="Amount in US Dollars" value="{{ Request::old('buget') ?: '' }}">
          <div class="input-group-addon">.00</div>
        </div>
        @if ($errors->has('buget'))
            <span class="help-block">{{ $errors->first('buget') }}</span>
        @endif
      </div>
      <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
        <label for="description">Please provide general idea of your requirements: </label>
        <textarea class="form-control" name="description" id="description" rows="5">{{ Request::old('description') ?: '' }}</textarea>
        @if ($errors->has('description'))
            <span class="help-block">{{ $errors->first('description') }}</span>
        @endif
      </div>
      <input type="hidden" name="_token" value="{{ Session::token() }}">
      <input type="submit" class="btn btn-purple btn-block" value="Make Commission Request" />
    </form>
  </div>
  <div class="col-md-5">

  </div>
  </div>
  <div class="col-md-4">
    @include('front.commissions.shared.sidebar')
  </div>
</div>
@endsection

@section('scripts')

@endsection
