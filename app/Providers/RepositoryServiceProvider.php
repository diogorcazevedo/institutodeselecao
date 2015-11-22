<?php

namespace IS\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'IS\Repositories\CategoryRepository',
            'IS\Repositories\CategoryRepositoryEloquent'
        );

        $this->app->bind(
            'IS\Repositories\ProductRepository',
            'IS\Repositories\ProductRepositoryEloquent'
        );
        $this->app->bind(
            'IS\Repositories\ClientRepository',
            'IS\Repositories\ClientRepositoryEloquent'
        );

        $this->app->bind(
            'IS\Repositories\UserRepository',
            'IS\Repositories\UserRepositoryEloquent'
        );
        $this->app->bind(
            'IS\Repositories\OrderRepository',
            'IS\Repositories\OrderRepositoryEloquent'
        );

        $this->app->bind(
            'IS\Repositories\CupomRepository',
            'IS\Repositories\CupomRepositoryEloquent'
        );
    }
}
