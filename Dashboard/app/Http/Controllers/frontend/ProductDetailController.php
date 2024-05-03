<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\Auth;
use App\Models\Carts;


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

    public function addToCart(Request $request)
    {

        // Check if the user is authenticated
        if (Auth::check()) {
            // User is authenticated, proceed with adding the product to cart
            $userId = Auth::id();
            $productId = $request->input('product_id'); // Verify how the product_id is being retrieved
            $quantity = $request->input('quantity');
            $cartItem = Carts::where('user_id', $userId)->where('product_id', $productId)->first();
            // Ensure product_id is not null before saving to the cart
            if ($productId) {
                if(isset($cartItem->id)){
                    $cartItem->quantity = $cartItem->quantity + $quantity;
                }else{
                    $cartItem = new Carts();
                    $cartItem->user_id = $userId;
                    $cartItem->product_id = $productId;
                    $cartItem->quantity = $quantity;
                }
                $cartItem->save();

                return redirect()->route('cart')->with('success', 'Product added to cart successfully.');
            } else {
                // Handle the case where product_id is null
                return redirect()->back()->with('error', 'Invalid product.');
            }
        } else {
            // User is not authenticated, redirect to login page
            return redirect()->route('login')->with('error', 'You need to log in to add items to your cart.');
        }
    }

}
