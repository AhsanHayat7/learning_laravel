<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Category;

class ShopController extends Controller
{
    //
    public function shop(Request $request){

        $products = Products::orderby('Customer_id', 'desc');
        if(isset($request->category_id) && !empty($request->category_id)){
            $products->where('category_id', $request->category_id);
        }
        $products = $products->get();
        $categories = Category::all();
        $getCategories = Category::getCategories();

        return view('web.Boutique.shop', compact('products','categories','getCategories'));
    }
}
