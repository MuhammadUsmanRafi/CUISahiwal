<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\AdminSpeakerModal;
use Illuminate\Http\Request;

class AdminSpeakerController extends Controller
{

    public function index()
    {
        if (session()->has('email')) {
            $speaker = AdminSpeakerModal::all();
            return view('backend.pages-speakers')->with('speakers', $speaker);
        } else {
            return redirect('/admin/login');
        }

    }
    public function addspeaker()
    {
        if (session()->has('email')) {
            return view('backend.pages-add-speaker');
        } else {
            return redirect('/admin/login');
        }

    }
    public function editspeaker($id)
    {
        if (session()->has('email')) {
            $speaker = AdminSpeakerModal::find($id);
            return view('backend.pages-edit-speakers')->with('speaker', $speaker);
        } else {
            return redirect('/admin/login');
        }

    }
    public function editsinglespeaker(Request $request, $id)
    {
        if (session()->has('email')) {
            $speaker = AdminSpeakerModal::find($id);

            if (!$speaker) {
                return redirect()->back()->with('error', 'Speaker not found');
            }

            $request->validate([
                'name' => 'required',
                'designation' => 'required',
                'furl' => 'required',
                'purl' => 'required',
                'durl' => 'required',
                'turl' => 'required',
                'imageurl' => 'image|mimes:jpeg,png,gif|max:2048'
            ]);

            if ($request->hasFile('imageurl')) {
                $imageName = 'Speaker_upload_' . time() . '.' . $request->imageurl->extension();
                $folderPath = 'frontend/images/resource';
                $imagePath = $folderPath . '/' . $imageName;
                $request->imageurl->move(public_path($folderPath), $imageName);
                $speaker->imageurl = $imagePath;
            } else {
                $speaker->imageurl = $request->current_image_url;
            }

            $speaker->sname = $request->name;
            $speaker->designation = $request->designation;
            $speaker->furl = $request->furl;
            $speaker->durl = $request->durl;
            $speaker->turl = $request->turl;
            $speaker->purl = $request->purl;
            $speaker->status = 1;
            $speaker->save();

            return redirect()->back()->with('success', 'Speaker updated successfully');
        } else {
            return redirect('/admin/login');
        }


    }
    public function addsinglespeaker(Request $request)
    {
        if (session()->has('email')) {
            $request->validate([
                'name' => 'required',
                'designation' => 'required',
                'furl' => 'required',
                'purl' => 'required',
                'durl' => 'required',
                'turl' => 'required',
                'imageurl' => 'image|mimes:jpeg,png,gif|max:2048'
            ]);

            $speaker = new AdminSpeakerModal();


            $imageName = 'Speaker_upload_' . time() . '.' . $request->imageurl->extension();
            $folderPath = 'frontend/images/resource';
            $imagePath = $folderPath . '/' . $imageName;
            $request->imageurl->move(public_path($folderPath), $imageName);
            $speaker->imageurl = $imagePath;

            $speaker->sname = $request->name;
            $speaker->designation = $request->designation;
            $speaker->furl = $request->furl;
            $speaker->durl = $request->durl;
            $speaker->turl = $request->turl;
            $speaker->purl = $request->purl;
            $speaker->status = 1;
            $speaker->save();

            return redirect()->back()->with('success', 'Speaker Added successfully');
        } else {
            return redirect('/admin/login');
        }
    }

    public function enablespeaker($id)
    {
        if (session()->has('email')) {
            $speaker = AdminSpeakerModal::find($id);
            if ($speaker) {
                $speaker->status = 1;
                $speaker->save();
                return redirect()->back()->with('success', 'Speaker Enable Successfully');
            }
            return redirect()->back();
        } else {
            return redirect('/admin/login');
        }

    }
    public function disablespeaker($id)
    {
        if (session()->has('email')) {
            $speaker = AdminSpeakerModal::find($id);
            if ($speaker) {
                $speaker->status = 0;
                $speaker->save();
                return redirect()->back()->with('success', 'Speaker Enable Successfully');
            }
            return redirect()->back();
        } else {
            return redirect('/admin/login');
        }
    }
    public function deletespeaker($id)
    {
        if (session()->has('email')) {
            $speaker = AdminSpeakerModal::find($id);
            if ($speaker) {
                $speaker->delete();
                return back()->with('success', 'Speaker deleted Succcessfully');
            }
            return redirect()->back();
        } else {
            return redirect('/admin/login');
        }
    }


}
