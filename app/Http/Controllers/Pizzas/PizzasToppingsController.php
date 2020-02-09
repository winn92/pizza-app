<?php

namespace App\Http\Controllers\Pizzas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PizzaToppingRequest;
use App\Repositories\Pizzas;

class PizzasToppingsController extends Controller
{
    protected $pizzas;
    public function __construct(Pizzas $pizzas)
    {
        $this->pizzas = $pizzas;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($pizza)
    {
        return $this->pizzas->findById($pizza)->toppings;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($pizza,PizzaToppingRequest $request)
    {
        return $this->pizzas->addToppingToPizzas($request,$pizza);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($pizza,$topping)
    {
        return $this->pizzas->removeToppingFromPizzas($pizza,$topping);
    }
}
