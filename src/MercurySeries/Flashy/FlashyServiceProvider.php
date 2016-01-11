<?php

namespace MercurySeries\Flashy;

use Illuminate\Support\ServiceProvider;

class FlashyServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            \MercurySeries\Flashy\SessionStore::class,
            \MercurySeries\Flashy\LaravelSessionStore::class
        );

        $this->app->singleton('flashy', function () {
            return $this->app->make(\MercurySeries\Flashy\FlashyNotifier::class);
        });
    }

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../../views', 'flashy');

        $this->publishes([
            __DIR__ . '/../../views' => base_path('resources/views/vendor/flashy')
        ]);
    }
}
