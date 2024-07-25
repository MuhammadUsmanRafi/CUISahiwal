<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\AdminComingSoonEventsModal;
use App\Models\backend\AdminEventsModal;
use App\Models\backend\AdminSessionsModal;
use Illuminate\Http\Request;

class AdminEventsController extends Controller
{
    public function create($schedule_id)
    {
        $schedule = AdminSessionsModal::findOrFail($schedule_id);
        return view('backend.event.create', compact('schedule'));
    }

    public function store(Request $request, $schedule_id)
    {
        $request->validate([
            'starttime' => 'required',
            'endtime' => 'required',
            'imageurl' => 'nullable|image|mimes:jpeg,png,gif|max:2048',
            'speaker' => 'required',
            'designation' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);

        $event = new AdminEventsModal();
        $event->starttime = $request->starttime;
        $event->endtime = $request->endtime;
        $event->speaker = $request->speaker;
        $event->designation = $request->designation;
        $event->title = $request->title;
        $event->description = $request->description;
        $event->schedule_id = $schedule_id;

        if ($request->hasFile('imageurl')) {
            $imageName = 'event_' . time() . '.' . $request->imageurl->extension();
            $request->imageurl->move(public_path('uploads'), $imageName);
            $event->imageurl = 'uploads/' . $imageName;
        }

        $event->save();

        return redirect()->route('admin.schedule.index')
            ->with('success', 'Event added successfully');
    }
}
