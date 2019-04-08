<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <script type="text/javascript" src="{{ URL::asset('js/cookie-manager.js') }}"></script>

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
          <li> <a href="#" @click="showCartModal = true" class="uk-text-lowercase">cart</a></li>
          <cart-component v-if="showCartModal" @close="showCartModal = false" @added="showCartModal = false"></cart-component>
        </ul>
      </div>
    </nav>
</div>
        @yield('content')
      </div>
      <script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
  </body>
</html>
