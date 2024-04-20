<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizza', [PizzaController::class, 'index']);

Route::post('/pizza', [PizzaController::class, 'index']);
Route::get('/pizza/create', [PizzaController::class, 'create']);
Route::get('/pizza/{id}', [PizzaController::class, 'showRouteParameter']);

