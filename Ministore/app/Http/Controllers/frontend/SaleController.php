<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    //
    public function sale(){
        return view('frontend.Ministore.sale');
    }
}
