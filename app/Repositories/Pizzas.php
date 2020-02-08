<?php
namespace App\Repositories;
use App\Http\Requests\{PizzaRequest,PizzaToppingRequest};

interface Pizzas
{
    public function store(PizzaRequest $request);
    public function getAll();
    public function findById($id);
    public function destroy($id);
    public function addToppingToPizzas(PizzaToppingRequest $request,$id);
}
