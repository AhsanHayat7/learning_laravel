<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;

class HomeController extends Controller
{
    //
    public function index(){
        $products = Products::all();
        return view('web.Boutique.index',compact('products'));
    }
}
