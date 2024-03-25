<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class IndexController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        $transformedData = $this->transformCustomerData($customers);
        // dd($customers);

        $title = 'Data Page';
        return view('data', compact('transformedData', 'title'));
    }

    public function group()
    {
        $customers = Customer::all();
        $transformedData = $this->transformCustomerData($customers);

        $title = 'Group Page';
        return view('group', compact('transformedData', 'title'));
    }

    // Method to transform customer data
    public function transformCustomerData($customers)
    {
        $transformedData = [];

        foreach ($customers as $customer) {
            $customerData = [
                'customer_id' => $customer->customer_id ?? null,
                'name' => $customer->name ?? null,
                'email' => $customer->email ?? null,
                'gender' => $customer->gender ?? null,
                'address' => $customer->address ?? null,
                'state' => $customer->state ?? null,
                'country' => $customer->country ?? null,
            ];

            // Add the customer data to the transformed data array
            $transformedData[] = $customerData;
        }

        // Wrap the transformed data in another array
        return [$transformedData];
    }
}
