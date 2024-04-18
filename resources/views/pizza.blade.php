@extends('layouts.layout')

@section('content')
    <div class = "centered-div">
       <div class= "large-text" >Pizza List</div>
       
            <!-- using for loop -->
        @for($i = 0 ; $i < count($pizz); $i++)
        <p>{{$pizz[$i]['type']}}</p>
        @endfor

        <!-- using foreach loop -->
        @foreach($pizz as $piz)
        <p>
            {{$loop->index}} - {{$piz['type']}} - {{$piz['base']}} - {{$piz['price'] }}
        </p>
        @endforeach
    </div>
    @endsection
    