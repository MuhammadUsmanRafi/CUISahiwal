<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\AdminRegisterModal;

class LatestUserRegistrationsComposer
{
    public function compose($view)
    {
        $latest3userregister = \App\Models\backend\AdminRegisterModal::orderBy('created_at', 'desc')->take(3)->get();

        $view->with('latest3userregister', $latest3userregister);
    }
}
