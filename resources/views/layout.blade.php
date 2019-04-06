<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <script type="text/javascript" src="{{ URL::asset('js/jquery-3.1.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/uikit-icons.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/uikit.min.js') }}"></script>
  <meta charset="utf-8">
  <link rel="stylesheet" href="{{ URL::asset('css/uikit.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <title>@yield('title', 'Tuna')</title>
  </head>
  <body>
    <div class="uk-padding-large">
    <nav class="uk-navbar-container" style="background: white;" uk-navbar>
      <div class="uk-navbar-left">
        <ul class="uk-navbar-nav">
          <li class="uk-active"><a href="/">Tuna</a></li>
        </ul>
      </div>
      <div class="uk-navbar-right">
        <ul class="uk-navbar-nav">
          <li><a href="/about" class="uk-text-lowercase">about</a></li>
          <li><a href="/tunes" class="uk-text-lowercase">tunes</a></li>

        </ul>
      </div>
    </nav>

        @yield('content')
      </div>
      <script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
  </body>
</html>
