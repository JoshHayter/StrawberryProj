@extends('layout')


@section('content')

  <h1>Tuner</h1>

  <ul>
    @foreach($tunes as $tune)
      <li>{{$tune}}</li>
    @endforeach
  </ul>

@endsection
