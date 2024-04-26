@extends('layouts.app')

@section('content')

<!-- /* list of pizzas ordered by customers, 
with a clickable link on the name which redirect you to pizza.details where an order can be deleted
*/  -->
    <div class ="wrapper pizza-index">
       <h1>Pizza Orders</h1>
       
            <!-- using for loop -->
            <!-- from the controller file -->
        <!-- @for($i = 0 ; $i < count($pizz); $i++)
        <p>{{$pizz[$i]['type']}}</p>
        @endfor -->

        <!-- using foreach loop -->
        <!-- @foreach($pizz as $piz)
        <p>
            {{$loop->index}} - {{$piz['type']}} - {{$piz['base']}} - {{$piz['price'] }}
        </p>
        @endforeach -->

        <!-- from the db -->

        @foreach($pizz as $piz)
        <div class= "pizza-item">
            <img src="/img/pizza.png" alt="pizza icon" >
           <h4><a href="{{route('pizza.details', $piz->id)}}">{{$piz->name}}</a></h4>
        </div>
        @endforeach
    </div>
    @endsection
    