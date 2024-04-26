
@extends('layouts.app')

@section('content')
<!-- /*This is the landing page*/ -->
<div class="flex-center position-ref full-height">
<div class="top-right links">
    
<!-- <a href="{{ url('/home') }}">Home</a> -->

<!-- <a href="{{ route('login') }}">Login</a>

<a href="{{ route('register') }}">Register</a> -->
</div>
    

<div class="content">
       <img src="/img/pizza-house.png" alt="pizza house">
        <div class="title m-b-md">The Kryptonite Pizza House </div>
            <p class="mssg">{{session('message')}}</p>
            <a href="{{route('pizza.create')}}">Order a Pizza</a>
       </div>
</div>
@endsection