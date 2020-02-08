<?php
namespace App\Repositories;
use App\Http\Requests\{PizzaRequest,PizzaToppingRequest};
use App\Models\Pizza;

class PizzasEloquent implements Pizzas
{
    public function store(PizzaRequest $request)
    {
        return Pizza::create($request->only('name'));
    }

    public function getAll(){
        return Pizza::all();
    }

    public function findById($id){
        return Pizza::with("toppings")->find($id);
    }

    public function destroy($id){
        Pizza::findOrFail($id)->delete();
        return response()->json(['success' => true]);
    }

    public function addToppingToPizzas(PizzaToppingRequest $request,$id){
        $pizza = $this->findById($id);
        $pizza->toppings()->sync($request->only("topping"), false);
        return $this->findById($id);
    }

}
