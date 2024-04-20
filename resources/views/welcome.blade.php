@extends('layouts.layout')

@section('content')
<div class = "centered-div">
    <section>
    <img src="/img/pizza-house.png" alt="pizza house">
       <div class= "large-text" >The Kryptonite Pizza House</div>
       <p>{{session('message')}}</p>
       <a href="/pizza/create">Order a Pizza</a>
    </section>
</div>
@endsection