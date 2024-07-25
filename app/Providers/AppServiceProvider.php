<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Providers\LatestUserRegistrationsComposer;
use App\Providers\LatestMessagesComposer;
use App\Providers\AdminComposer;

use View;

class AppServiceProvider extends ServiceProvider
{

    public function register(): void
    {
        //
    }
    public function boot()
    {
        View::composer('*', LatestMessagesComposer::class);
        View::composer('*', LatestUserRegistrationsComposer::class);
    }


}
