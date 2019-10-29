<?php

namespace App\Providers;

use App\Tenant\Observers\TenantObserver;
use App\Tenant\TenantManager;
use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(TenantManager::class, function(){
            return new TenantManager();
        });

        $this->app->singleton(TenantObserver::class, function(){
            return new TenantObserver(
                app(TenantManager::class)->getTenant()
            );
        });

        Request::macro('tenant', function(){
            return app(TenantManager::class)->getTenant();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
