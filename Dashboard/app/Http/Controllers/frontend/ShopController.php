<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;

class ShopController extends Controller
{
    //
    public function shop(){

        $products = Products::all();

        return view('web.Boutique.shop', compact('products'));
    }
}
