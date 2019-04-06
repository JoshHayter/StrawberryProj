<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Shopify;

class ShopifyServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Shopify::class, function(){
          return new Shopify(config('services.shopify.apikey'),
                              config('services.shopify.password'),
                              config('services.shopify.hostname'),
                              config('services.shopify.secret'));
        });
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
