<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\AdminFAQsModal;
use Illuminate\Http\Request;

class AdminFAQsController extends Controller
{
    public function index()
    {
        if (session()->has('email')) {
            $faqs = AdminFAQsModal::all();
            return view('backend.pages-faq', compact('faqs'));
        } else {
            return redirect('/admin/login');
        }
    }
    public function destory($id)
    {
        $faq = AdminFAQsModal::find($id);
        $faq->delete();
        return redirect('/admin/faqs')->with('success', 'FAQ deleted successfully');
    }

    public function openAddFaqs()
    {
        if (session()->has('email')) {
            return view('backend.pages-add-faqs');
        } else {
            return redirect('/admin/login');
        }
    }
    public function editExistingFaq($id)
    {
        if (session()->has('email')) {
            $faq = AdminFAQsModal::find($id);
            return view('backend.pages-edit-faqs', compact('faq'));

        } else {
            return redirect('/admin/login');
        }

    }
    public function updateFaq(Request $request, $id)
    {
        $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string|max:2000',
        ]);

        $faq = AdminFAQsModal::find($id);
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->save();

        return redirect('/admin/faqs')->with('success', 'FAQ updated successfully');
    }
    public function addNewFaqs(Request $request)
    {
        $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string|max:2000',
        ]);

        $faq = new AdminFAQsModal();
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->save();

        return back()->with('success', 'FAQ added successfully');
    }
    public function enableFaq($id)
    {
        $faq = AdminFAQsModal::find($id);
        if ($faq) {
            $faq->status = 1;
            $faq->save();
            return redirect()->back()->with('success', 'FAQ enabled successfully');
        }
        return redirect()->back()->with('error', 'FAQ not found');
    }

    public function disableFaq($id)
    {
        $faq = AdminFAQsModal::find($id);
        if ($faq) {
            $faq->status = 0;
            $faq->save();
            return redirect()->back()->with('success', 'FAQ disabled successfully');
        }
        return redirect()->back()->with('error', 'FAQ not found');
    }
}
