<?php

namespace App\Http\Controllers\Pizzas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PizzaRequest;
use App\Repositories\Pizzas;

class PizzasController extends Controller
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
    public function index()
    {
        return $this->pizzas->getAll();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PizzaRequest $request)
    {
        return $this->pizzas->store($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($pizza)
    {
        return $this->pizzas->findById($pizza);
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
    public function destroy($pizza)
    {
        return $this->pizzas->destroy($pizza);
    }
}
