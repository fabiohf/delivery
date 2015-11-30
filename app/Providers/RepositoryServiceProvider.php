<?php

namespace Delivery\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'Delivery\Repositories\CategoriaRepository',
            'Delivery\Repositories\CategoriaRepositoryEloquent'
        );

        $this->app->bind(
            'Delivery\Repositories\ClienteRepository',
            'Delivery\Repositories\CategoriaRepositoryEloquent'
        );

        $this->app->bind(
            'Delivery\Repositories\PedidoRepository',
            'Delivery\Repositories\PedidoRepositoryEloquent'
        );

        $this->app->bind(
            'Delivery\Repositories\PedidoItemRepository',
            'Delivery\Repositories\PedidoItemRepositoryEloquent'
        );

        $this->app->bind(
            'Delivery\Repositories\ProdutoRepository',
            'Delivery\Repositories\ProdutoRepositoryEloquent'
        );

        $this->app->bind(
            'Delivery\Repositories\UserRepository',
            'Delivery\Repositories\UserRepositoryEloquent'
        );
    }
}
