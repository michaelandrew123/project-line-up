<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\APIRepositoryInterface;
use App\Repositories\APIRepository;


class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(APIRepositoryInterface::class, APIRepository::class);
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
