<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $url = url('/customer');
        $title = "Customer Registration";
        return view('customer', compact('url', 'title'));
    }


    public function store(Request $request)
    {
        echo "<pre>";
        print_r($request->all());
        //Insert query

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

            return redirect('/customer');
        
    }

    public function view()
    {   
        $customers = Customer::all();
        //echo "<pre>";
        //print_r($customers);
        //echo "</pre>";
        //die;
        return view('customer-view', compact('customers'));                                             
    }

    public function create()
    {   
        $url = url('/customer');
        $title = "Customer Registration";
        return view('customer', compact('url', 'title'));
    }


    public function delete($id)
    {
        $customer = Customer::find($id);
        if(!is_null($customer)){
            $customer->delete();
        }
        return redirect('customer');
    }

    public function edit($id)
    {
        $customer = Customer::find($id);
        if(is_null($customer)){

            return redirect()->route('customer.view');
        } else{
            $title = "Update Customer";
            $url = url('/customer/update') . "/" . $id;
            return view('customer',compact('customer','url','title'));
        }
    }
}








