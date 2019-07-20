<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

use App\Services\LanRepository;
use App\Services\Impl\LanInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $models = array(
            'Auth'
        );
        foreach ($models as $model) {
            $this->app->bind('App\Repositories\\'.$model.'Repository','App\Repositories\Impl\\'.$model.'RepositoryImpl');
            $this->app->bind('App\Services\\'.$model.'Service', 'App\Services\Impl\\'.$model.'ServiceImpl');
        }
    }
}
