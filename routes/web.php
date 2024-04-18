<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizza', function () {
    $pizzas = [
        ['type' => 'Haiwan', 'base' => 'cheese crust', 'price' => 10],
        ['type' => 'volcano', 'base' => 'garlic crust', 'price' => 10],
        ['type' => 'veg supreme', 'base' => 'thin & cripsy', 'price' => 10]
];
    return view('pizza', ['pizz' => $pizzas] );
});