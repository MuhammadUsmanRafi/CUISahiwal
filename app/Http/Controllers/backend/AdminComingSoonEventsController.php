<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\AdminComingSoonEventsModal;
use Illuminate\Http\Request;

class AdminComingSoonEventsController extends Controller
{
    public function index()
    {
        if (session()->has('email')) {
            $events = AdminComingSoonEventsModal::all();
            return view('backend.pages-events')->with('events', $events);
        } else {
            return redirect('/admin/login');
        }

    }

    public function create()
    {
        if (session()->has('email')) {
            return view('backend.pages-add-event');

        } else {
            return redirect('/admin/login');
        }

    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'eventdate' => 'required|date',
            'location' => 'required|string|max:255',
            'seats' => 'required|integer|min:1',
            'speakers' => 'required|integer|min:1',
            'imageurl' => 'nullable|image|mimes:jpeg,png,gif|max:2048'
        ]);

        $event = new AdminComingSoonEventsModal();

        if ($request->hasFile('imageurl')) {
            $imageName = 'Event_upload_' . time() . '.' . $request->imageurl->extension();
            $folderPath = 'frontend/images/resource';
            $imagePath = $folderPath . '/' . $imageName;
            $request->imageurl->move(public_path($folderPath), $imageName);
            $event->imageurl = $imagePath;
        }

        $event->title = $request->title;
        $event->subtitle = $request->subtitle;
        $event->eventdate = $request->eventdate;
        $event->location = $request->location;
        $event->seats = $request->seats;
        $event->speakers = $request->speakers;
        $event->status = 1;

        $event->save();

        return redirect()->back()->with('success', 'Event added successfully');
    }


    public function edit($id)
    {
        if (session()->has('email')) {
            $event = AdminComingSoonEventsModal::find($id);
        return view('backend.pages-edit-event')->with('event', $event);

        } else {
            return redirect('/admin/login');
        }

    }

    public function update(Request $request, $id)
    {
        $event = AdminComingSoonEventsModal::find($id);

        if (!$event) {
            return redirect()->back()->with('error', 'Event not found');
        }

        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'eventdate' => 'required',
            'location' => 'required',
            'seats' => 'required|integer',
            'speakers' => 'required|integer',
            'imageurl' => 'image|mimes:jpeg,png,gif|max:2048'
        ]);

        if ($request->hasFile('imageurl')) {
            $imageName = 'Event_upload_' . time() . '.' . $request->imageurl->extension();
            $folderPath = 'frontend/images/resource';
            $imagePath = $folderPath . '/' . $imageName;
            $request->imageurl->move(public_path($folderPath), $imageName);
            $event->imageurl = $imagePath;
        } else {
            $event->imageurl = $request->current_image_url;
        }

        $event->title = $request->title;
        $event->subtitle = $request->subtitle;
        $event->eventdate = $request->eventdate;
        $event->location = $request->location;
        $event->seats = $request->seats;
        $event->speakers = $request->speakers;
        $event->status = 1;
        $event->save();

        return redirect()->back()->with('success', 'Event updated successfully');
    }

    public function enable($id)
    {
        $event = AdminComingSoonEventsModal::find($id);
        if ($event) {
            $event->status = 1;
            $event->save();
            return redirect()->back();
        }
        return redirect()->back()->with('success', 'Event Enabled successfully');
    }

    public function disable($id)
    {
        $event = AdminComingSoonEventsModal::find($id);
        if ($event) {
            $event->status = 0;
            $event->save();
            return back();
        }
        return redirect()->back()->with('success', 'Event Disabled successfully');

    }

    public function destroy($id)
    {
        $event = AdminComingSoonEventsModal::find($id);
        if ($event) {
            $event->delete();
            return back();
        }
        return redirect()->back()->with('success', 'Event Deleted successfully');

    }
}
