<?php
namespace App\Repositories;
use App\Http\Requests\PizzaRequest;
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
        return Pizza::find($id);
    }

    public function destroy($id){
        Pizza::findOrFail($id)->delete();
        return response()->json(['success' => true]);
    }

}
