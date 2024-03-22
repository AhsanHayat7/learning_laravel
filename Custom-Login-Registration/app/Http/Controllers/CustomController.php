<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class CustomController extends Controller
{
    public function index()
        {
            return view('login');
        }

    public function login(Request $request)
    {    // validate data
        //dd($request->all());

       $credentials = $request->validate([
            'email'=> 'required',
            'password'=> 'required',
        ]);

        //login code

        if(\Auth::attempt($request->only('email','password'))){
            return redirect('home');
        }
        return redirect('login')->withError('Login details are not valid');
    


    }    
    
    public function register_view()

    {
        return view('register');
    }

    public function register(Request $request)
    {

        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|confirmed'
        ]);

        //save in users table

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);

        //login user here
        
        if(\Auth::attempt($request->only('email','password'))){
            return redirect('home');
        }
        return redirect('register')->withError('Error');

    }

    public function home()
    {
        return view('home');
    }

    public function logout()
    {
        \Session::flush();
        \Auth::logout();
        return redirect('');
    }
}
