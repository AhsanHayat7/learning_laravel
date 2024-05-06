<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Orders;
use App\Models\Orderitems;
use App\Models\Carts;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    //
    public function store(Request $request)
    {
        // Validate request data
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|string|max:20',
            'address_line_1' => 'required|string|max:255',
            'town_city' => 'required|string|max:255',
            'state_county' => 'required|string|max:255',
            'country' => 'required|string|max:255',
        ]);

        // Fetch cart items for the authenticated user
        $userId = Auth::id();
        $cartItems = Carts::where('user_id', $userId)->get();

        // Create the order
        $order = new Orders();
        // Populate the order details from the form data
        $order->fill($request->only([
            'first_name',
            'last_name',
            'email',
            'phone',
            'company_name',
            'country',
            'address_line_1',
            'address_line_2',
            'town_city',
            'state_county',
            // Add other fields from the form if necessary
        ]));
        // Save the order
        $order->save();
        dd($cartItems);
        // Loop through cart items and create order items
        foreach ($cartItems as $item) {
            $orderItem = new Orderitems();
            $orderItem->order_id = $order->id;
            $orderItem->product_id = $item->product_id;
            $orderItem->product_price = $item->product->Price;
            $orderItem->product_quantity = $item->quantity;
            $orderItem->total = $item->quantity * $item->product->Price;
            $orderItem->save();
        }

        // Clear the cart after the order is placed (implement this part)

        // Redirect to a success page or order details page
        return redirect()->route('cart')->with('success', 'Your order has been placed successfully.');
    }
    public function order(){
        return view('cart');
    }
}
