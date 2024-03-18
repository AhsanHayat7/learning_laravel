<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function create()
    {
        return view('customer-create');
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
}
