<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Session;

class CategoriesController extends Controller
{
    //
    public function add(){
        $customers = Customer::all();
        return view('frontend.dashboard.categories.categories-add', compact('customers'));
    }

    public function all(){
        return view('frontend.dashboard.categories.categories-all');
    }

    public function store(Request $request)
    {
        $customer = new Customer;
        $customer ->Name = $request['Name'];
        $customer->Position  = $request['Position'];
        $customer ->Age = $request['Age'];
        $customer->Start_Date  = $request['Start_Date'];
        $customer->save();

        return redirect()->route('add');
    }

    public function delete($id)
    {
        $customer = Customer ::find($id)->delete();
        return redirect()->route('add');
    }

    public function edit($id)
    {
        $customer = Customer ::find($id);
        return view('frontend.dashboard.categories.form', compact('customer'));
    }

    public function form(){
        return view('frontend.dashboard.categories.form');
    }
}
