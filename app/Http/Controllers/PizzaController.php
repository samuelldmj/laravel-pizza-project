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

    public function store(){
        //logging to the console
        // error_log(request('name'));
        // error_log(request('type'));
        // error_log(request('base'));

        //pushing to the db
        //the column becomes our properties when using the model class.
        $pizzas = new Pizza();

        $pizzas->name = request('name');
        $pizzas->type = request('type');
        $pizzas->base = request('base');
      
        //displaying to the terminal.
        // error_log($pizzas);
        $pizzas->save();

        return redirect('/')->with('message', 'Thank you for ordering.');
    }
}
