@extends('layouts.layout')

@section('content')

<div class="wrapper create-pizza">
<h1>Book a new pizza</h1>
<form action="/pizza" method="POST">
    @csrf
    <label for="name" >Your Name:</label>
    <input type="text" name="name" id="name"><br><br>

    <label for="type">Choose Pizza type:</label>
    <select name="type" id="type">
    <option value="margherita">Margherita</option>
    <option value="hawaiian">Hawaiian</option>
    <option value="volcano">Volcano</option>
    <option value="vegSupreme">Veg Supreme</option>
    </select>

    <label for="base">Choose Base type:</label>
    <select name="base" id="base">
    <option value="cheesyCrust">Cheesy Crust</option>
    <option value="garlicCrust">Garlic Crust</option>
    <option value="thin&cripsy">Thin & Cripsy</option>
    <option value="thick">Thick</option>
    </select>

    <input type="submit" value="Order Pizza">
</form>

</div>
@endsection