<?php

namespace App\Providers;

use App\Collaborator;
use App\Example;
use App\OtherExample;
use Illuminate\Support\Facades\App;
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
        $this->app->bind('App\Example', function() {
            $collaborator = new Collaborator();
            $foo = 'bar';
            return new Example($collaborator, $foo);
        });

        $this->app->bind('example', function () {
            return new OtherExample('api-key-here');
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
