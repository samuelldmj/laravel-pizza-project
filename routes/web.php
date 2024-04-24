<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizza', [PizzaController::class, 'index'])->middleware('auth');
Route::get('/pizza/create', [PizzaController::class, 'create']);
Route::post('/pizza', [PizzaController::class, 'store']);
Route::get('/pizza/{id}', [PizzaController::class, 'showRouteParameter'])->middleware('auth');
Route::delete('/pizza/{id}', [PizzaController::class, 'clearOrder'])->middleware('auth');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
