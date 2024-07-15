<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cms;

class CmsController extends Controller
{
    //
    public function cms(){

        return view('frontend.dashboard.ControlManagementSystem.cms');
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'Header' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'Image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Assuming Image is a file upload
            'Header_1' => 'required|string|max:255',
            'Description_1' => 'required|string',
            'Header_2' => 'required|string|max:255',
            'Description_2' => 'required|string',
        ]);

        // Create a new CMS instance and fill it with validated data
        $cms = new Cms();
        $cms->Header = $request->input('Header');
        $cms->title = $request->input('title');
        // Assuming Image is a file upload, store the file and save the path in the database

         // Check if an image is uploaded
         if ($request->hasFile('Image')) {
            $file = $request->file('Image');
            $filename = rand(11111, 99999) . time() . $file->getClientOriginalName();
            $imagePath = 'uploads/';
            $file->move(public_path($imagePath), $filename);
            $cms->Image = $imagePath . $filename;
        }

        $cms->Header_1 = $request->input('Header_1');
        $cms->Description_1 = $request->input('Description_1');
        $cms->Header_2 = $request->input('Header_2');
        $cms->Description_2 = $request->input('Description_2');



        // Save the new CMS instance to the database
        $cms->save();

        // Redirect the user back with a success message
        return redirect()->route('cms')->with('success', 'CMS created successfully!');
    }
}

