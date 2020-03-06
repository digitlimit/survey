<?php

namespace App\Providers;

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
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

//        //
//        Log::info('My awesome log message', ['key' => 'value']);
//
//        Event::listen('illuminate.log', function ($level, $message, $context) {
//            //$level example - info, error etc
//            //$message example - Model not found --
//            //$context - usually and object
//
//            //send your email here
//        });
    }
}
