<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::resource('pizzas', 'Pizzas\PizzasController')->only(['store','index','show','destroy']);
Route::resource('toppings', 'Toppings\ToppingsController')->only(['store','index','destroy']);
Route::resource('pizzas.toppings', 'Pizzas\PizzasToppingsController')->only(['store','index','destroy']);
