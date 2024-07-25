<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\AdminAddBlogModal;
use Illuminate\Http\Request;



class AdminAddBlogController extends Controller
{
    public function index()
    {
        if (session()->has('email')) {
            return view('backend.pages-add-blogs');
        } else {
            return redirect('/admin/login');
        }

    }

    public function editblog(Request $request)
    {
        if (session()->has('email')) {
            $blogId = $request->query('id');
            $blog = AdminAddBlogModal::find($blogId);
            return view('backend.pages-add-blogs')->with('blog', $blog);
        } else {
            return redirect('/admin/login');
        }

    }

    public function postBlog(Request $request)
    {
        if (session()->has('email')) {
            $request->validate([
                'title' => 'required',
                'uploadedby' => 'required',
                'totalcomment' => 'required',
                'shortdescription' => 'required|max:50',
                'longdescription' => 'required|max:1000',
                'imageurl' => 'required|image|mimes:jpeg,png,gif|max:2048'
            ]);

            $imageName = 'blog_upload_' . time() . '.' . $request->imageurl->extension();
            $folderPath = 'frontend/images/resource';
            $imagePath = $folderPath . '/' . $imageName;
            $request->imageurl->move(public_path($folderPath), $imageName);

            $blog = new AdminAddBlogModal();
            $blog->title = $request->title;
            $blog->uploadedby = $request->uploadedby;
            $blog->totalcomment = $request->totalcomment;
            $blog->shortdescription = $request->shortdescription;
            $blog->longdescription = $request->longdescription;
            $blog->imageurl = $imagePath;
            $blog->status = 1;
            $blog->save();

            return back()->with('success', 'Blog added Successfully');
        } else {
            return redirect('/admin/login');
        }

    }
}
