<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            \App\Repositories\Cates\CateRepositoryInterface::class,
            \App\Repositories\Cates\CateEloquentRepository::class
        );
        $this->app->singleton(
            \App\Repositories\News\NewsRepositoryInterface::class,
            \App\Repositories\News\NewsEloquentRepository::class
        );
        $this->app->singleton(
            \App\Repositories\Tags\TagsRepositoryInterface::class,
            \App\Repositories\Tags\TagsEloquentRepository::class
        );
        $this->app->singleton(
            \App\Repositories\Users\UsersRepositoryInterface::class,
            \App\Repositories\Users\UsersEloquentRepository::class
        );
        $this->app->singleton(
            \App\Repositories\CateProd\CateProdRepositoryInterface::class,
            \App\Repositories\CateProd\CateProdEloquentRepository::class
        );
        $this->app->singleton(
          \App\Repositories\Prods\ProdsRepositoryInterface::class,
          \App\Repositories\Prods\ProdsEloquentRepository::class
        );
    }
}
