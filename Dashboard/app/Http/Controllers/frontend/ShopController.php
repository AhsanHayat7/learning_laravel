<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Category;

class ShopController extends Controller
{
    //
    public function shop(){

        $products = Products::all();
        $categories = Category::all();
        $getCategories = Category::getCategories();

        return view('web.Boutique.shop', compact('products','categories','getCategories'));
    }
}
