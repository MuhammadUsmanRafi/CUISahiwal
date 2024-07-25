<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\AboutUsModal;
use App\Models\frontend\FeaturesModal;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        $facts = AboutUsModal::all();
        $features = FeaturesModal::all();
        return view('frontend.about-us', compact("facts", "features"));
    }
}
