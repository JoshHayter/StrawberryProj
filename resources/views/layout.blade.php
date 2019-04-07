<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    {{-- <script type="text/javascript" src="{{ URL::asset('js/jquery-3.1.1.min.js') }}"></script> --}}

  <meta charset="utf-8">
  <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
  <link rel="stylesheet" href="{{ URL::asset('css/uikit.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <title>@yield('title', 'Vinyly')</title>
  </head>
  <body style="background: #fff;">
    <div id="app" class="uk-padding-large">
      <div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky">
    <nav class="uk-navbar-container" style="background: #fff;" uk-navbar>
      <div class="uk-navbar-left">
        <ul class="uk-navbar-nav">
          <li><a href="/shop" class="uk-text-lowercase">shop</a></li>
        </ul>
      </div>
      <div class="uk-navbar-center">
        <ul class="uk-navbar-nav">
          <li><a href="/">Vinyly</a></li>
        </ul>
      </div>
      <div class="uk-navbar-right">
        <ul class="uk-navbar-nav">
          <li @click="showCartModal = true" class="uk-link uk-text-lowercase">cart</li>
          <cart-component v-if="showCartModal" @close="showCartModal = false"></cart-component>
        </ul>
      </div>
    </nav>
</div>
        @yield('content')
      </div>
      <script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('js/cookie-manager.js') }}"></script>
  </body>
</html>
