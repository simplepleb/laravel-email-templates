<?php

namespace Pleb;

use Illuminate\Support\ServiceProvider;

class EmailTemplatesServiceProvider extends ServiceProvider
{
    /**
     * Boot the application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {

            $this->publishes([
                __DIR__.'/config/pleb.php' => $this->app->configPath('pleb.php'),
            ], 'pleb-email-templates-config');

            $this->publishes([
                __DIR__.'/resources/views' => $this->app->resourcePath('views/vendor'),
            ], 'pleb-email-templates-views');

            $this->publishes([
                __DIR__.'/resources/lang/en' => $this->app->resourcePath('lang/en'),
            ], 'pleb-email-templates-lang');

            $this->publishes([
                __DIR__.'/public/assets/img' => $this->app->basePath('public/assets/img'),
            ], 'pleb-email-templates-img');

            $this->publishes([
                __DIR__.'/app/Mail' => $this->app->basePath('app/Mail'),
            ], 'pleb-email-templates-app');
        }
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // 
    }
}
