<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\FAQsModal;
use Illuminate\Http\Request;

class FAQsController extends Controller
{
    public function index()
    {
        $faqs = FAQsModal::all();
        return view('frontend.faqs', compact("faqs"));
    }

}
