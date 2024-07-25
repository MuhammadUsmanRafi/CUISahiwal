<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\AdminSessionsModal;
use Illuminate\Http\Request;

class AdminSessionsController extends Controller
{
    public function index()
    {
        $schedules = AdminSessionsModal::with('events')->get();
        return view('backend.schedule.index', compact('schedules'));
    }

    public function create()
    {
        return view('backend.schedule.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'day' => 'required',
            'dd' => 'required',
            'mm' => 'required',
            'yyyy' => 'required',
        ]);

        $schedule = AdminSessionsModal::create($request->all());

        return redirect()->route('admin.schedule.index')
            ->with('success', 'Schedule created successfully');
    }
}
