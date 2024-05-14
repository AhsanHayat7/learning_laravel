<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Carts;
use App\Models\Category;
use App\Models\Cms;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index(){
        $products = Products::all();
        $userId = Auth::id();
        $cartItemsCount = Carts::where('user_id', $userId)->count();
        $parentCategories = Category::where('parent_id', '!=', 0)->get();

        $cms = Cms::all();

        return view('web.Boutique.index',compact('products','cartItemsCount','parentCategories','cms'));
    }
}
