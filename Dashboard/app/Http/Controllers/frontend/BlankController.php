<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlankController extends Controller
{
    //
    public function blank(){
        
        return view('frontend.dashboard.blank');
    }
}
