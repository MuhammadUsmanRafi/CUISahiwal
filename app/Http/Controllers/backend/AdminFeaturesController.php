<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\AdminFeaturesModal;
use Illuminate\Http\Request;

class AdminFeaturesController extends Controller
{
    public function index()
    {
        if (session()->has('email')) {
            $features = AdminFeaturesModal::all();
            return view('backend.pages-features', compact('features'));
        } else {
            return redirect('/admin/login');
        }

    }

    public function create()
    {
        if (session()->has('email')) {
            return view('backend.pages-add-feature');
        } else {
            return redirect('/admin/login');
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'icon' => 'required|max:100',
            'title' => 'required|max:100',
            'description' => 'required|max:100',
            'status' => 'required|boolean'
        ]);

        AdminFeaturesModal::create($request->all());

        return redirect('/admin/features')->with('success', 'Feature added successfully');
    }


    public function edit($id)
    {
        if (session()->has('email')) {
            $feature = AdminFeaturesModal::find($id);
            return view('backend.pages-edit-feature', compact('feature'));
        } else {
            return redirect('/admin/login');
        }

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'icon' => 'required|max:100',
            'title' => 'required|max:100',
            'description' => 'required|max:100',
            'status' => 'required|boolean'
        ]);

        $feature = AdminFeaturesModal::findOrFail($id);
        $feature->update([
            'icon' => $request->icon,
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status
        ]);

        return redirect('/admin/features')->with('success', 'Feature updated successfully');
    }


    public function destroy($id)
    {
        $feature = AdminFeaturesModal::find($id);
        $feature->delete();

        return redirect()->back()->with('success', 'Feature deleted successfully');
    }

    public function enable($id)
    {
        $feature = AdminFeaturesModal::find($id);
        $feature->status = 1;
        $feature->save();

        return redirect()->back()->with('success', 'Feature enabled successfully');
    }

    public function disable($id)
    {
        $feature = AdminFeaturesModal::find($id);
        $feature->status = 0;
        $feature->save();

        return redirect()->back()->with('success', 'Feature disabled successfully');
    }
}
