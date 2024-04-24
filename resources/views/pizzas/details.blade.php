@extends('layouts.app')

@section('content')

<div class="wrapper pizza-details">
    <h1>Order for {{$code->name}}</h1>
    <p class="type">Type - {{$code->type}}</p>
    <p class="base">Base - {{$code->base}}</p>
    <p class="spices">Selected Spices:</p>
    <ul>
        @foreach($code->spices as $spice)
        <li>{{$spice}}</li>
        @endforeach
    </ul>

    <form  action="/pizza/{{ $code->id }}" method="POST">
    @csrf
    @method('DELETE')

    <button>Clear Order</button>
    </form>
</div>
<a href="/pizza" class="back"><- Back to pizza</a>
@endsection