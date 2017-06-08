<div class="container-fluid">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="{{ route('home') }}">{{ config('app.name') }}</a>
  </div>

  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

    <ul class="nav navbar-nav navbar-right">
      <li><a href="{{ route('home') }}">Home</a></li>
      <li><a href="{{ route('about') }}">About</a></li>
      <li><a href="{{ route('portfolio') }}">Dev Portfolio</a></li>
      <li><a href="{{ route('writing') }}">Writing Portfolio</a></li>
      <li><a href="{{ route('blog.home') }}">Blog</a></li>
      @if (Auth::guest())
          <li><a href="{{ route('login') }}">Login</a></li>
          <li><a href="{{ route('register') }}">Register</a></li>
      @else

          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                  {{ Auth::user()->getNameOrUsername() }} <span class="caret"></span>
              </a>

              <ul class="dropdown-menu" role="menu">
                  <li><a href="{{ route('account.edit') }}"> Edit</a></li>
                  <li><a href="{{ route('account.orders') }}"> Orders</a></li>
                  <li role="separator" class="divider"></li>
                  <li>
                      <a href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                          Logout
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>
                  </li>
              </ul>
          </li>
      @endif
    </ul>
  </div>
</div>
