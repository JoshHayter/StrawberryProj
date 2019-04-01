@extends('layout')


@section('content')

<div class="uk-child-width-1-1@s uk-child-width-1-2@m uk-child-width-1-3@l uk-grid-match uk-flex-bottom" uk-grid>

    @foreach ($tunes as $tune)
    <div class="uk-cover-container uk-responsive-width uk-text-right">
        <div>
            <img data-src="{{$tune->imageURL}}" alt="{{$tune->title}}" class="uk-align-center" uk-img>
            <p>
                <li>{{$tune->title}}</li>
                <li>{{gmdate("i:s", $tune->length)}}</li>
                <li>£{{($tune->price)/100}}</li>
            </p>
        </div>
    </div>
    @endforeach

</div>
@endsection
