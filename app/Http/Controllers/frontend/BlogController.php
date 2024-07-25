<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\BlogCommentModal;
use App\Models\frontend\BlogModal;
use Illuminate\Http\Request;
class BlogController extends Controller
{

    public function index()
    {
        $results = BlogModal::where('status', 1)->get();
        return view('frontend.blog-grid', compact("results"));
    }

    public function singleblog($id)
    {
        $singleblogdetail = BlogModal::findOrFail($id);
        $singleblogcomments = BlogCommentModal::where('blog_id', $id)->get();
        return view('frontend.blog-single', compact('singleblogdetail', 'singleblogcomments'));
    }

    public function postComment(Request $request,$id)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:1000',
        ]);

        $blogdetail = BlogModal::findOrFail($id);
        $blogdetail->totalcomment += 1;
        $blogdetail->save();

        $comment = new BlogCommentModal();
        $comment->commentatorname = $request->username;
        $comment->cmessage = $request->message;
        $comment->blog_id = $id;
        $comment->save();

        return redirect()->back();
    }

}
