<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\SpeakerModel;
use Illuminate\Http\Request;

class SpeakerController extends Controller
{
    public function index()
    {
        $result = SpeakerModel::where('status', 1)->get();
        return view('frontend.speakers')->with('result', $result);
    }
}
