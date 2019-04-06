@extends('layout')


@section('content')

<div id="app" class="uk-child-width-1-1@s uk-child-width-1-2@m uk-child-width-1-3@l uk-grid-match uk-flex-bottom" uk-grid>

    {{-- @foreach ($tunes as $tune) --}}
    @for ($i = 0; $i <6; $i++)
    <div class="uk-cover-container uk-responsive-width uk-text-right">
      <vinyl-component image="http://lorempixel.com/1600/1600/" title="TestTitle" description="TestDesctiption"></vinyl-component>
        {{-- <div>
            <img data-src="{{$tune->imageURL}}" alt="{{$tune->title}}" class="uk-align-center" uk-img>
            <p>
                <li>{{$tune->title}}</li>
                <li>{{gmdate("i:s", $tune->length)}}</li>
                <li>£{{($tune->price)/100}}</li>
            </p>
        </div> --}}
    </div>
  @endfor
    {{-- @endforeach --}}

</div>
@endsection
