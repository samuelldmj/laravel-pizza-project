@extends('layouts.app')

@section('content')

<!-- /*This page handles how pizza is deleted*/ -->

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

    <!-- Deleting by id occurs here. -->
    <form  action="{{route('pizza.destroy', $code->id)}}" method="POST">
    @csrf
    @method('DELETE')

    <button>Clear Order</button>
    </form>
</div>
<a href="{{route('pizza.index')}}" class="back"><- Back to pizza</a>
@endsection