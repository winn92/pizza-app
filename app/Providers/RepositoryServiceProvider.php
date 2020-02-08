<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Pizzas;
use App\Repositories\PizzasEloquent;

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
