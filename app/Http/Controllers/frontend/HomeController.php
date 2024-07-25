<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\AboutUsModal;
use App\Models\frontend\BlogModal;
use App\Models\frontend\DashboardEventsModal;
use App\Models\frontend\FeaturesModal;
use App\Models\frontend\HomeModel;
use App\Models\frontend\PricingModal;
use App\Models\frontend\ScheduleModal;
use App\Models\frontend\SpeakerModel;
use Illuminate\Http\Request;
use Carbon\Carbon;
class HomeController extends Controller
{
    public function index()
    {
        $commingsoonevents = DashboardEventsModal::all();
        $latestEventdate = DashboardEventsModal::where('eventdate', '>=', Carbon::now()->toDateString())->orderBy('eventdate', 'asc')->get();
        if ($latestEventdate->isEmpty()) {
            $counterdate = Carbon::yesterday()->toDateString();
        } else {
            $counterdate = $latestEventdate->first()->eventdate;
        }
        $pricings = PricingModal::all();
        $features = FeaturesModal::all();
        $speakers = SpeakerModel::where('status', 1)->get();
        $facts = AboutUsModal::all();
        $schedules = ScheduleModal::all();
        $blogs = BlogModal::where('status', 1)->take(3)->get();
        return view('frontend.index', compact("commingsoonevents", "pricings", "counterdate", "features", "speakers", "facts", "schedules", "blogs"));
    }
}
