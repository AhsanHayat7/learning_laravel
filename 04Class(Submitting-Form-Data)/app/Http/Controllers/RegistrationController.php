<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
      {
         return view('layouts.form');
      }

      public function  register(Request $request)
      {
        //return view('layouts.register');
        echo "<pre>";
        print_r($request->all());
      }


    }
