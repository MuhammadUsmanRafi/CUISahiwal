<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\AdminBlogModal;
use Illuminate\Http\Request;

class AdminBlogController extends Controller
{

    public function index()
    {
        if (session()->has('email')) {
            $results = AdminBlogModal::all();
            return view('backend.pages-blogs', compact('results'));
        } else {
            return redirect('/admin/login');
        }

    }

}
