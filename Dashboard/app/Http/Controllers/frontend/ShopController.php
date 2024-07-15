<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use App\Models\Carts;

class ShopController extends Controller
{
    //
    public function shop(Request $request){

        $productsQuery = Products::query();

        // Apply sorting based on orderby parameter
        if ($request->has('orderby')) {
            $productsQuery->orderBy('Name', $request->orderby);
        }

        // Apply category filter if provided
        if(isset($request->category_id) && !empty($request->category_id)){
            $productsQuery->where('category_id', $request->category_id);
        }

        // Retrieve paginated products
        $products = $productsQuery->paginate(3);


        // Retrieve all categories
        $categories = Category::all();

        // Retrieve categories with subcategories
        $getCategories = Category::getCategories();

        $userId = Auth::id();
        $cartItemsCount = Carts::where('user_id', $userId)->count();


        // Pass products, categories, and categories with subcategories to the view
        return view('web.Boutique.shop', compact('products','categories','getCategories','cartItemsCount',));
    }

}
