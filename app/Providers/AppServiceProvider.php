<?php

namespace App\Providers;

use App\Repositories\Eloquent\EloquentRepository;
use App\Repositories\Eloquent\PostEloquentRepository;
use App\Repositories\PostRepositoryInterface;
use App\Repositories\RepositoryInterface;
use App\Services\Impl\PostService;
use App\Services\PostServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application Services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(PostServiceInterface::class, PostService::class);
        $this->app->singleton(PostRepositoryInterface::class, PostEloquentRepository::class);

        $this->app->singleton(RepositoryInterface::class, EloquentRepository::class);
    }

    /**
     * Bootstrap any application Services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
