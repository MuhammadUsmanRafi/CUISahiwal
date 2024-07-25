<?php

use App\Models\backend\AdminContactModal;
use App\Models\backend\AdminProfileModal;
use App\Models\backend\AdminRegisterModal;

return [
    'admin' => function() {
        return AdminProfileModal::where('id', 1)->get();
    },

    'latest3contact' => function() {
        return AdminContactModal::latest()->take(3)->get();
    },

    'latest3userregister' => function() {
        $latest3userregister = AdminRegisterModal::orderBy('created_at', 'desc')->take(3)->get();
        return $latest3userregister;
    },
];
