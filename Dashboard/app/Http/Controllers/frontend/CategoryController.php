<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    //
    public function add()
    {
        $getCategories = Category::getCategories();
        $categories = Category::all();
        $category = new Category();
        return view('frontend.dashboard.categories.category', compact('categories', 'getCategories','category'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'CategoryName' => 'required|string|max:255',
            'parent_id' => 'nullable|integer', // Assuming this field is nullable and should be an integer
            'category_image' => 'nullable|image', // Assuming this field is nullable and should be an image file
            'category_discount' => 'nullable|numeric', // Assuming this field is nullable and should be numeric
            'description' => 'nullable|string', // Assuming this field is nullable and should be a string
            'url' => 'nullable|string|max:255', // Assuming this field is nullable and should be a string with max length 255
            'status' => 'required|boolean', // Assuming this field is required and should be a boolean
        ]);

               // Create a new category instance and fill it with the request data
               $category = new Category();
               $category->CategoryName = $request->input('CategoryName');
               $category->parent_id = $request->input('parent_id');
               // Handle file upload for category_image if needed
               if ($request->hasFile('category_image')) {
                $file = $request->file('category_image');
                $filename = Str::slug($request->input('CategoryName')) . rand(00000, 99999) . '.' . $file->getClientOriginalExtension();
                $imagePath = 'uploads/';
                $file->move(public_path($imagePath), $filename);
                $category->category_image = $imagePath . $filename;
            }
               $category->category_discount = $request->input('category_discount');
               $category->description = $request->input('description');
               $category->url = $request->input('url');
               $category->status = $request->input('status');

               // Save the category
               $category->save();

               // Redirect back with success message
               return redirect()->route('product.category')->with('success', 'Category added successfully.');
           }


           public function delete($id)
           {
               $Category = Category ::find($id)->delete();
               return redirect()->route('product.category');
           }

           public function edit($id)
           {   $getCategories = Category::getCategories();
               $category = Category ::find($id);

               return view('frontend.dashboard.categories.category', compact('category','getCategories'));
           }


           public function view(){


                $categories = Category::all();
                return view('frontend.dashboard.categories.productcategory', compact('categories'));
           }

}


