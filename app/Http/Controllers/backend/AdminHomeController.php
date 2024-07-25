<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\AdminBlogModal;
use App\Models\backend\AdminComingSoonEventsModal;
use App\Models\backend\AdminContactModal;
use App\Models\backend\AdminEventsModal;
use App\Models\backend\AdminFAQsModal;
use App\Models\backend\AdminFeaturesModal;
use App\Models\backend\AdminHomeModal;
use App\Models\backend\AdminRegisterModal;
use App\Models\backend\AdminSessionsModal;
use App\Models\backend\AdminSpeakerModal;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function index()
    {
        if(session()->has('email')){
            $blogs = AdminBlogModal::all();
            $speakers = AdminSpeakerModal::all();
            $events = AdminComingSoonEventsModal::all();
            $features = AdminFeaturesModal::all();
            $sessions = AdminSessionsModal::all();
            $faqs = AdminFAQsModal::all();
            $userRegisters = AdminRegisterModal::all();
            $contacts = AdminContactModal::all();
            return view('backend.index', compact('blogs', 'speakers', 'events', 'features', 'sessions', 'faqs', 'userRegisters', 'contacts'));
        }
        else {
            return redirect('/admin/login');
        }
    }
}
