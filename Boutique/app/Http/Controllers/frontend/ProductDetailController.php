<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    //
    public function productdetail(){
        return view('frontend.Boutique.detail');
    }
}