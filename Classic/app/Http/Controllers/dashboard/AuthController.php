<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class AuthController extends Controller
{
    //
    public function log(){
        return view('dashboard.login');
    }

    public function login(Request $request){
        // validate
        $request->validate([
        'email' => 'required',
        'password'=> 'required',
        ]);

        if(\Auth::attempt($request->only('email','password'))){

            return redirect('classic');
        }
        return redirect('login')->withError('Login details are not valid');

    }




    public function reg(){
        return view('dashboard.register');
    }

    public function register(Request $request){
        $request->validate([
        'name'=>'required',
        'email'=>'required|email|unique:users',
        'password'=>'required|confirmed',

        ]);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>\Hash::make($request->password)
        ]);

        if(\Auth::attempt($request->only('email','password'))){

            return redirect('classic');
        }
        return redirect('register')->withError('Error');

    }

    public function logout(){
        \Session::flush();
        \Auth::logout();
        return redirect('');

    }

}
