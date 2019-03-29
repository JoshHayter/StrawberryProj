<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    @foreach ($tunes as $tune)
      <li>{{$tune->title}}</li>
    @endforeach
  </body>
</html>
