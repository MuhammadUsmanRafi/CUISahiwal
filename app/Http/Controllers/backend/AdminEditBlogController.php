<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\AdminEditBlogModal;
use Illuminate\Http\Request;

class AdminEditBlogController extends Controller
{
    public function editblog($id)
    {
        if (session()->has('email')) {
            $blog = AdminEditBlogModal::findOrFail($id);
            return view('backend.pages-edit-blogs')->with('blog', $blog);
        } else {
            return redirect('/admin/login');
        }
    }

    public function editsingleblog(Request $request, $id)
    {
        if (session()->has('email')) {
            $blog = AdminEditBlogModal::find($id);

            if (!$blog) {
                return redirect()->back()->with('error', 'Blog not found');
            }

            $request->validate([
                'title' => 'required',
                'uploadedby' => 'required',
                'totalcomment' => 'required',
                'shortdescription' => 'required|max:50',
                'longdescription' => 'required|max:1000',
                'imageurl' => 'image|mimes:jpeg,png,gif|max:2048'
            ]);

            if ($request->hasFile('imageurl')) {
                $imageName = 'blog_upload_' . time() . '.' . $request->imageurl->extension();
                $folderPath = 'frontend/images/resource';
                $imagePath = $folderPath . '/' . $imageName;
                $request->imageurl->move(public_path($folderPath), $imageName);
                $blog->imageurl = $imagePath;
            } else {
                $blog->imageurl = $request->current_image_url;
            }

            $blog->title = $request->title;
            $blog->uploadedby = $request->uploadedby;
            $blog->totalcomment = $request->totalcomment;
            $blog->shortdescription = $request->shortdescription;
            $blog->longdescription = $request->longdescription;
            $blog->status = 1;

            $blog->save();

            return redirect()->back()->with('success', 'Blog updated successfully');
        } else {
            return redirect('/admin/login');
        }
    }

    public function deleteBlog($id)
    {
        if (session()->has('email')) {
            $blog = AdminEditBlogModal::find($id);
            if ($blog) {
                $blog->delete();
                return redirect()->back()->with('success', 'Blog deleted successfully');
            }
            return redirect()->back()->with('error', 'Blog not found');
        } else {
            return redirect('/admin/login');
        }

    }

    public function enableblog($id)
    {
        if (session()->has('email')) {
            $blog = AdminEditBlogModal::find($id);
            if ($blog) {
                $blog->status = 1;
                $blog->save();
                return redirect()->back()->with('success', 'Blog deleted successfully');
            }
            return redirect()->back()->with('error', 'Blog not found');
        } else {
            return redirect('/admin/login');
        }

    }

    public function disableblog($id)
    {
        if (session()->has('email')) {
            $blog = AdminEditBlogModal::find($id);
            if ($blog) {
                $blog->status = 0;
                $blog->save();
                return redirect()->back()->with('success', 'Blog deleted successfully');
            }
            return redirect()->back()->with('error', 'Blog not found');
        } else {
            return redirect('/admin/login');
        }
    }

}
