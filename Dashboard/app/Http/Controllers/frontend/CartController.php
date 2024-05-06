<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Carts;
use App\Models\Orderitems;

class CartController extends Controller
{
    //
    public function showCart()
    {
        // Fetch cart items for the authenticated user
        $userId = Auth::id();
        $cartItems = Carts::where('user_id', $userId)->get();


        // Calculate subtotal and total
        $subtotal = 0;
        foreach ($cartItems as $item) {
            $subtotal += $item->quantity * $item->product->Price;
        }
        // Assuming total is same as subtotal for now
        $total = $subtotal;

        // Pass cart items to the view
        return view('web.boutique.cart', compact('cartItems','subtotal', 'total'));
    }


     // Delete cart item
     public function deleteCartItem(Request $request)
     {
         // Get the product ID to be deleted from the request
         $productId = $request->input('product_id');

         // Find the cart item by its ID and delete it
         $cartItem = Carts::findOrFail($productId);
         $cartItem->delete();

         // Redirect back to the cart page
         return redirect()->route('cart')->with('success', 'Product deleted successfully.');
     }
}
