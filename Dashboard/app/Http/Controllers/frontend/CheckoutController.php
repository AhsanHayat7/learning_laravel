<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Carts;
use App\Models\Orderitems;
use App\Models\Orders;
use Illuminate\Support\Facades\Validator;



class CheckoutController extends Controller
{
    //
    public function checkout(Request $request)
    {
        // Validate the form data
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'country' => 'required|string|max:255',
            'address_line_1' => 'required|string|max:255',
            'town_city' => 'required|string|max:255',
            'state_county' => 'required|string|max:255',
        ]);

        // If validation fails, redirect back with errors
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Create a new order instance
        $order = new Orders();

        // Populate the order attributes with form data
        $order->first_name = $request->input('first_name');
        $order->last_name = $request->input('last_name');
        $order->email = $request->input('email');
        $order->phone = $request->input('phone');
        $order->company_name = $request->input('company_name');
        $order->country = $request->input('country');
        $order->address_line_1 = $request->input('address_line_1');
        $order->address_line_2 = $request->input('address_line_2');
        $order->town_city = $request->input('town_city');
        $order->state_county = $request->input('state_county');
        $order->save();

        // Calculate and populate grand total
        $totalPrice = 0;
        $cartItems = Carts::where('user_id', auth()->id())->get();
        foreach ($cartItems as $item) {
            $totalItemPrice = $item->quantity * $item->product->Price;
            $totalPrice += $totalItemPrice;

            $orderItem = new Orderitems();
            $orderItem->order_id = $order->id;
            $orderItem->product_id = $item->product_id;
            $orderItem->product_price = $item->product->Price;
            $orderItem->product_quantity = $item->quantity;
            $orderItem->total = $item->quantity * $item->product->Price;
            $orderItem->save();
        }

        $order->grand_total = $totalPrice;

        // Save the order to the database
        $order->save();

        // Now, you can also associate this order with the cart items if needed
        // You can iterate through the cart items and associate them with this order

        // Redirect to a success page or return a response as needed
        return redirect()->route('checkout');
    }

    public function showCheckout()
    {
        $cartItems = Carts::where('user_id', auth()->id())->get();

        return view('web.Boutique.checkout', compact('cartItems'));
    }
}
