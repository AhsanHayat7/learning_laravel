<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wishlist;
class WishlistController extends Controller
{
    //
    public function wishlist()
{
    // Retrieve the wishlist items for the authenticated user
    $wishlistItems = Wishlist::where('user_id', auth()->id())->get();

    // Pass the wishlist items to the wishlist view
    return view('web.boutique.wishlist', compact('wishlistItems'));
}

// Method to add a product to the wishlist
public function addToWishlist(Request $request)
{
    {
        if (!auth()->check()) {
            // Redirect to login or handle the case where the user is not authenticated
            return redirect()->route('login')->with('error', 'You need to be logged in to add products to your wishlist.');
        }

        // Validate the request
        $request->validate([
            'product_id' => 'required|exists:products,Customer_id',
        ]);

        // Check if the product is already in the wishlist
        $wishlistItem = Wishlist::where('user_id', auth()->id())
                                ->where('product_id', $request->product_id)
                                ->first();

        if ($wishlistItem) {
            // Product is already in the wishlist, so show error message
            $message = 'Product already added to wishlist.';
            return back()->with('error', $message);
        } else {
            // Product is not in the wishlist, so add it
            Wishlist::create([
                'user_id' => auth()->id(),
                'product_id' => $request->product_id,
            ]);
            $message = 'Product added to wishlist successfully.';
        }

        // Redirect back with success message
        return back()->with('success', $message);
    }
}


    public function removeFromWishlist(Wishlist $wishlist)
    {
        // Check if the authenticated user owns the wishlist item
        if ($wishlist->user_id === auth()->id()) {
            // Delete the wishlist item
            $wishlist->delete();

            // Redirect back with success message
            return redirect()->route('wishlist')->with('success', 'Product removed from wishlist successfully.');
        }

        // If the user doesn't own the wishlist item, redirect back with an error message
        return redirect()->route('wishlist')->with('error', 'You are not authorized to remove this product from the wishlist.');
    }

}
