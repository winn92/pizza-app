<?php
namespace App\Repositories;
use App\Http\Requests\ToppingRequest;

interface Toppings
{
    public function store(ToppingRequest $request);
    public function getAll();
    public function destroy($id);
}
