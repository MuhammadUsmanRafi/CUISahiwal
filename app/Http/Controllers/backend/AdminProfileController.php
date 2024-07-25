<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\AdminProfileModal;
use Illuminate\Http\Request;

class AdminProfileController extends Controller
{
    public function index()
    {
        if (session()->has('email')) {
            $admin = AdminProfileModal::where('id', 1)->first();
            return view('backend.users-profile', compact('admin'));
        } else {
            return redirect('/admin/login');
        }
    }
    public function updateAdminProfile(Request $request, $id)
    {
        if (session()->has('email')) {
            $admin = AdminProfileModal::find($id);
            if (!$admin) {
                return redirect()->back()->with('error', 'Admin not found');
            }

            $request->validate([
                'fullName' => 'required|string|max:255',
                'about' => 'required|string|max:1000',
                'company' => 'required|string|max:255',
                'job' => 'required|string|max:255',
                'country' => 'required|string|max:255',
                'address' => 'required|string|max:255',
                'phone' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'twitter' => 'required|url|max:255',
                'facebook' => 'required|url|max:255',
                'instagram' => 'required|url|max:255',
                'linkedin' => 'required|url|max:255',
                'profileImage' => 'image|mimes:jpeg,png,gif|max:2048'
            ]);

            if ($request->hasFile('profileImage')) {
                $imageName = 'profile_upload_' . time() . '.' . $request->profileImage->extension();
                $folderPath = 'frontend/img';
                $imagePath = $folderPath . '/' . $imageName;
                $request->profileImage->move(public_path($folderPath), $imageName);
                $admin->profile_image = $imagePath;
            }

            $admin->name = $request->fullName;
            $admin->about = $request->about;
            $admin->company = $request->company;
            $admin->job = $request->job;
            $admin->country = $request->country;
            $admin->address = $request->address;
            $admin->phone = $request->phone;
            $admin->email = $request->email;
            $admin->twitter = $request->twitter;
            $admin->facebook = $request->facebook;
            $admin->instagram = $request->instagram;
            $admin->linkedin = $request->linkedin;

            $admin->save();

            return redirect()->back()->with('success', 'Profile updated successfully');
        } else {
            return redirect('/admin/login');
        }
    }
}
