<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\ContactModal;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('frontend.contact');
    }

    public function submitMessage(Request $request){
        $request->validate([
            'username' => "required",
            'phone' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required|max:5000'
        ]);

        $contactModel = new ContactModal();
        $contactModel->username = $request->username;
        $contactModel->email = $request->email;
        $contactModel->phone = $request->phone;
        $contactModel->subject = $request->subject;
        $contactModel->message = $request->message;
        $contactModel->ipaddress = $request->ip();
        $contactModel->save();
        return back()->withSuccess('Thank For Contacting Us');
    }
}
