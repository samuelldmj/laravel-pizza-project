@extends('layouts.layout')

@section('content')
    <div class = "centered-div">
        <section>
       <h1 class= "large-text" >Pizza List</h1>
       
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
        <p>
          {{$piz->id}} - {{$piz->name}} - {{$piz->type}} - {{$piz->base}} 
        </p>
        @endforeach
        </section>
    </div>

    @endsection
    