<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FAQController extends Controller
{
    //
    public function faq(){
        
        return view('frontend.dashboard.faq');
    }
}
