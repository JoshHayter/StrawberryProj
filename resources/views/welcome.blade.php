@extends('layout')


@section('content')

<div class="uk-position-center uk-text-center">

  <h2>Vinyly</h2>
  <img data-src="{{ asset('img/Vinyl.png') }}" alt="" class="uk-align-center uk-height-small" uk-img>
  <p>
    It's Vinyly here...
<br>
    A bespoke collection of vinyl records
<br>
    Updated weekly
  </p>
  <p>
    <a href="/shop" class="uk-button uk-button-primary uk-button-small" style="background-color: #22afa5;">Browse shop</a>
  </p>
</div>




@endsection
