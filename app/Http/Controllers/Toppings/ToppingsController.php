<?php

namespace App\Http\Controllers\Toppings;

use App\Http\Controllers\Controller;
use App\Http\Requests\ToppingRequest;
use Illuminate\Http\Request;
use App\Repositories\Toppings;

class ToppingsController extends Controller
{
    protected $toppings;
    public function __construct(Toppings $toppings)
    {
        $this->toppings = $toppings;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->toppings->getAll();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ToppingRequest $request)
    {
        return $this->toppings->store($request);
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
    public function destroy($topping)
    {
        return $this->toppings->destroy($topping);
    }
}
