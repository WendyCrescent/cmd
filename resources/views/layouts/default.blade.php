<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title') - {{ config('app.name') }}</title>

    <link rel="stylesheet" href="/css/themes/yeti.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
    <link rel="stylesheet" href="/css/modern-business.css" />
    <script src="https://use.fontawesome.com/e0d52a7952.js"></script>
    <link rel="stylesheet" href="/css/app.css" />

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-default navbar-static-top">
      @include('layouts.shared.nav')
    </nav>

    <div class="jumbotron" id="frontPageJumbo">
        <div class="container" id="JumboHeader">
          @yield('pre')
        </div>
    </div>

    @include('layouts.shared.messages')

    <div class="container">
      @yield('content')
    </div>

    <footer class="navbar navbar-default navbar-static-top">
      @include('layouts.shared.footer')
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    @yield('scripts')
  </body>
</html>
