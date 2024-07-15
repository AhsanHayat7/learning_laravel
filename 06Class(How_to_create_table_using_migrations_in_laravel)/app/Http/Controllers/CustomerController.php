<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function create()
    {    
        $url = url('/customer');
        return view('customer-create',compact('url'));
    }


    public function index()
    {
        return view('layouts.customer');
    }


    public function store(Request $request)
    {
        //echo "<pre>";
        //print_r($request->all());

        // Insert query


        $customer = new Customer;
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->gender = $request['gender'];
        $customer->address = $request['address'];
        $customer->state = $request['state'];
        $customer->country = $request['country'];
        $customer->dob = $request['dob'];
        $customer->password = md5($request['password']);
        $customer->save();

        return redirect()->route('customer-view');
    }
    public function view()
    {
        $customers = Customer::all();
        // //echo "<pre>";
        // //print_r($customers);
        // //echo "<pre>";
        // //die;
        // $data = ;
        return view('customer-view', compact('customers'));
    }
    public function delete($id)
    {
        $customer = Customer::find($id);

        if (!is_null($customer)) {
            $customer->delete();
        }
        return redirect('customer');
    }

    public function edit($id)
    {
        $customer = Customer::find($id);

        if (is_null($customer)) {
            // not found
            return redirect()->route('customer-view');
        } else {
            $title = "Update Customer";
            $url = url('/customer/update') . "/" . $id;
            return view('layouts.customer', compact( 'customer','title', 'url'));
        }
    }
}
