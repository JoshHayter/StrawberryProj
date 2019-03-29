<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title', 'Tuna')</title>
  </head>
  <body>
    <p>
      <ul>
        <li><a href="/">Home</a> </li>
        <li><a href="/about">About</a> </li>
        <li><a href="/contact">Contact</a> </li>
      </ul>
    </p>

        @yield('content')
  </body>
</html>
