<?php

namespace ProvaB4\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\ProvaB4\Repositories\ContatoRepository::class, \ProvaB4\Repositories\ContatoRepositoryEloquent::class);
        $this->app->bind(\ProvaB4\Repositories\TelefoneRepository::class, \ProvaB4\Repositories\TelefoneRepositoryEloquent::class);
        //:end-bindings:
    }
}
