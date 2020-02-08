<?php
namespace App\Repositories;
use App\Http\Requests\PizzaRequest;

interface Pizzas
{
    public function store(PizzaRequest $request);
    public function getAll();
    public function findById($id);
    public function destroy($id);
}
