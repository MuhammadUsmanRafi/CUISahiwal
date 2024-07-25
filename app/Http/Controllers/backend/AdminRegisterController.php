<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\AdminRegisterModal;
use Illuminate\Http\Request;

class AdminRegisterController extends Controller
{
    public function index()
    {
        if (session()->has('email')) {
            $userRegisters = AdminRegisterModal::all();
            return view('backend.pages-register', compact('userRegisters'));

        } else {
            return redirect('/admin/login');
        }
    }
    public function destroy($id)
    {
        $contact = AdminRegisterModal::findOrFail($id);
        $contact->delete();

        return redirect()->back()->with('success', 'Registration deleted successfully');
    }
}
