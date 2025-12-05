<?php

namespace App\Providers;
use App\Providers\Schema;
use Illuminate\Support\ServiceProvider;
use League\Config\SchemaBuilderInterface;
use Illuminate\Support\Facades\URL;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        if (env('APP_ENV') === 'production') {
            URL::forceScheme('https');
        }
    }

}
