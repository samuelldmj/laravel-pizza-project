<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function index(){
    //     $pizzas = [
    //         ['type' => 'Haiwan', 'base' => 'cheese crust', 'price' => 10],
    //         ['type' => 'volcano', 'base' => 'garlic crust', 'price' => 10],
    //         ['type' => 'veg supreme', 'base' => 'thin & cripsy', 'price' => 10]
    // ];

    //from the db
    // $pizzas = Pizza::all();
    // $pizzas = Pizza::orderBy('name')->get();
    $pizzas = Pizza::where('type', 'huwain')->get();
    //changed the file from /pizza to pizzas.index
        return view('pizzas.index', ['pizz' => $pizzas] );
    }

    public function showRouteParameter($id){
        //changed the file from /pizza/{$id} to pizzas.details
        $pizzaId = Pizza::findOrfail($id);
        return view('pizzas.details', ['code' => $pizzaId] );
    }

    public function create(){
        return view('pizzas.create');
    }
}
