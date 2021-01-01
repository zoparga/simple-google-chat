<?php

namespace zoparga\SimpleGoogleChat;

use Illuminate\Support\ServiceProvider;

class SimpleGoogleChatServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('simplegooglechat', function($app) {
            return new SimpleGoogleChat();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/simplegooglechat.php' => config_path('simplegooglechat.php'),
            ], 'config');
        }
    }
}
