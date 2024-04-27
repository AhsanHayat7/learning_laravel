<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category;

class CategoryController extends Controller
{
    //
    public function add()
    {
        return view('frontend.dashboard.categories.category');
    }

    public function store(Request $request)
    {
        $request->validate([
            'CategoryName' => 'required|string|max:255',
        ]);

        $category = new Category();
        $category->CategoryName = $request->input('CategoryName');
        $category->save();

        return redirect()->route('all')->with('success', 'Category added successfully.');
    }
}

