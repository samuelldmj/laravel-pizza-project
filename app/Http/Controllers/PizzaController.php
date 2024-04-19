<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index(){
        $pizzas = [
            ['type' => 'Haiwan', 'base' => 'cheese crust', 'price' => 10],
            ['type' => 'volcano', 'base' => 'garlic crust', 'price' => 10],
            ['type' => 'veg supreme', 'base' => 'thin & cripsy', 'price' => 10]
    ];
        return view('pizza', ['pizz' => $pizzas] );
    }

    public function showRouteParameter($id){
        return view('details', ['code' => $id] );
    }
}
