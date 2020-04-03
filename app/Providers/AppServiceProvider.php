<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use TCG\Voyager\Facades\Voyager;
use App\Models\DataRow;
use App\Observers\DataRowObserver;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Voyager::useModel('DataRow', DataRow::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        DataRow::observe(DataRowObserver::class);
        Voyager::addAction(\App\Actions\Rate::class);
        Voyager::addAction(\App\Actions\DeleteRate::class);
    }
}
