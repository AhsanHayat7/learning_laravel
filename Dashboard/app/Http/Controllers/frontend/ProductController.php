<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{
    /**
     * Show the form for adding a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function addproduct(Request $request)
        
    {   
        $search = $request['search'] ?? "";
        if($search != ""){
            $products = Products::where('Name', 'LIKE',  "%$search%")->paginate(5);
        }else{
            $products = Products::paginate(5);

        }
        #$products = $search ? Products::where('Name', 'LIKE',  "%$search%")->get() : Products::all();
        return view('frontend.dashboard.Product.AddProduct', compact('products', 'search'));
    }

    /**
     * Store a newly created product in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate request data
        $request->validate([
            'Name' => 'required',
            'Price' => 'required|numeric',
            'Image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'Description' => 'required',
        ]);

        // Handle file upload
        // $imagePath = $request->file('Image')->store('uploads', 'frontend');
        $file = $request->file('Image');
        $filename = rand(11111, 99999) . time() . $file->getClientOriginalName();
        $imagePath = 'uploads/';
        $file->move(public_path($imagePath), $filename);

        // Create new product instance
        $product = new Products;
        $product->Name = $request->input('Name');
        $product->Price = $request->input('Price');
        $product->Image = $imagePath.$filename;
        $product->Description = $request->input('Description');
        $product->save();

        // Redirect with success message
        return redirect()->route('all')->with('success', 'Product added successfully!');
    }

    /**
     * Display the specified product.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewproduct()
    {   
        
        $products = Products::all();
        return view('frontend.dashboard.Product.ViewProduct', compact('products'));
    }
}
