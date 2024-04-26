<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizza', [PizzaController::class, 'index'])->name('pizza.index')->middleware('auth');
Route::get('/pizza/create', [PizzaController::class, 'create'])->name("pizza.create");
Route::post('/pizza', [PizzaController::class, 'store'])->name('pizza.store');
Route::get('/pizza/{id}', [PizzaController::class, 'showRouteParameter'])->name('pizza.details')->middleware('auth');
Route::delete('/pizza/{id}', [PizzaController::class, 'clearOrder'])->name('pizza.destroy')->middleware('auth');


Auth::routes(
    // [ 'register' => false]
);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
