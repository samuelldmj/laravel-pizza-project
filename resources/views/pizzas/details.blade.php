@extends('layouts.layout')

@section('content')

<div class="wrapper pizza-details">
    <h1>Order for {{$code->name}}</h1>
    <p class="type">Type - {{$code->type}}</p>
    <p class="base">Base - {{$code->base}}</p>
</div>
<a href="/pizza" class="back"><- Back to pizza</a>
@endsection