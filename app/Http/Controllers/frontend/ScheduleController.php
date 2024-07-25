<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\ScheduleModal;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        $schedules = ScheduleModal::all();
        return view('frontend.schedule', compact('schedules'));
    }
}
