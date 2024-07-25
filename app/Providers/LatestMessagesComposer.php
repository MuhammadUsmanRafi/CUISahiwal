<?php

namespace App\Providers;

use App\Models\backend\AdminContactModal;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\ContactModal;

class LatestMessagesComposer
{
    public function compose($view)
    {
        $latest3contact = AdminContactModal::orderBy('created_at', 'desc')->take(3)->get();

        $view->with('latest3contact', $latest3contact);
    }
}
