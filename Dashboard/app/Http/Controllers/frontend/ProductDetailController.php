<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;


class ProductDetailController extends Controller
{
    public function productdetail($id)
    {
        $product = Products::with('images')->find($id);

         // Extract tags from the product's data
         $tags = explode(',', $product->Tags);


        $categories = Products::distinct()->pluck('category_id')->toArray();


        // Return the view with the product details
        return view('web.boutique.detail', compact('product', 'categories','tags'));
    }
}
