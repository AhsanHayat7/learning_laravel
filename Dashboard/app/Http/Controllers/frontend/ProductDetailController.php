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
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity');

        // Ensure product_id and quantity are not empty before saving to the cart
        if ($productId && $quantity) {
            $cartItem = Carts::where('user_id', $userId)
                            ->where('product_id', $productId)
                            ->first();

            if ($cartItem) {
                // If the item already exists in the cart, update the quantity
                $cartItem->quantity = $quantity;
            } else {
                // If the item doesn't exist in the cart, create a new cart item
                $cartItem = new Carts();
                $cartItem->user_id = $userId;
                $cartItem->product_id = $productId;
                $cartItem->quantity = $quantity;
            }

            $cartItem->save();

            return redirect()->route('cart')->with('success', 'Product added to cart successfully.');
        } else {
            // Handle the case where product_id or quantity is empty
            return redirect()->back()->with('error', 'Invalid product or quantity.');
        }
    } else {
        // User is not authenticated, redirect to login page
        return redirect()->route('login')->with('error', 'You need to log in to add items to your cart.');
    }
    }
}
