<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\blogs;
class BlogController extends Controller
{
    //
    public function blog()
    {
        $blogs = blogs::all();
        return view('dashboard.blog', compact('blogs'));
    }

    public function create()
    {
        return view('dashboard.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required',
        ]);

        $file = $request->file('image');
        $filename = rand(11111, 99999) . time() . $file->getClientOriginalName();
        $imagePath = 'uploads/';
        $file->move(public_path($imagePath), $filename);

        $fullImagePath = $imagePath . $filename;
        blogs::create([
            'title' => $request->title,
            'image' => $fullImagePath,
            'description' => $request->description,
        ]);

        return redirect()->route('manage-blog')->with('success', 'Blog created successfully.');
    }
}
