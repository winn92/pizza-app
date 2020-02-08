<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\{Pizzas,Toppings};
use App\Repositories\{PizzasEloquent,ToppingsEloquent};

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Pizzas::class, PizzasEloquent::class);
        $this->app->bind(Toppings::class, ToppingsEloquent::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
