<?php

namespace App\Providers;

use App\Events\ProductPurchased;
use App\Listeners\AwardAchievements;
use App\Listeners\SendShareableCupon;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        // ProductPurchased::class => [
        //     AwardAchievements::class,
        //     SendShareableCupon::class
        // ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }

    //Habilita o scan de eventos automáticos
    public function shouldDiscoverEvents()
    {
        return true;
    }

}
