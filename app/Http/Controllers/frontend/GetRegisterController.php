<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\DashboardEventsModal;
use App\Models\frontend\EventModal;
use App\Models\frontend\GetRegisterModal;
use App\Models\frontend\ScheduleModal;
use Illuminate\Http\Request;

class GetRegisterController extends Controller
{
    public function index()
    {
        $allsessions = EventModal::all();
        $allevents = DashboardEventsModal::all();
        return view('frontend.register-events', compact('allsessions', 'allevents'));
    }

    public function submitregisterform(Request $request)
    {
        $validatedData = $request->validate([
            'type' => 'required|in:event,session',
            'title' => 'required',
            'username' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'nullable|string',
        ]);

        $type = $validatedData['type'];
        $title = $validatedData['title'];
        $username = $validatedData['username'];
        $email = $validatedData['email'];
        $phone = $validatedData['phone'];
        $message = $validatedData['message'];

        $registration = new GetRegisterModal();
        $registration->username = $username;
        $registration->email = $email;
        $registration->phone = $phone;
        $registration->message = $message;

        try {
            if ($type === 'event') {
                $event = DashboardEventsModal::find($title);
                if (!$event) {
                    throw new \Exception('Selected event not found.');
                }
                $registration->event_id = $event->id;
                $registration->venue = $event->location ?? 'COMSATS Sahiwal';
                $registration->time = $event->eventdate;
                $registration->session_id = null;
            } elseif ($type === 'session') {
                $session = EventModal::find($title);
                if (!$session) {
                    throw new \Exception('Selected session not found.');
                }
                $schedule = ScheduleModal::find($session->schedule_id);
                if (!$schedule) {
                    throw new \Exception('Schedule details not found for the selected session.');
                }
                $registration->session_id = $session->id;
                $registration->venue = $session->venue ?? 'COMSATS Sahiwal';
                $registration->time = "{$schedule->dd}-{$schedule->mm}-{$schedule->yyyy}";
                $registration->event_id = null;
            }

            $registration->save();

            return redirect('/register')->with('success', 'Registration submitted successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
        }
    }

}
