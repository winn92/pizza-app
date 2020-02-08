<?php
namespace App\Repositories;
use App\Http\Requests\ToppingRequest;
use App\Models\Topping;

class ToppingsEloquent implements Toppings
{
    public function store(ToppingRequest $request)
    {
        return Topping::create($request->only('name'));
    }

   public function getAll(){
        return Topping::all();
    }

    public function destroy($id){
        Topping::findOrFail($id)->delete();
        return response()->json(['success' => true]);
    }

}
