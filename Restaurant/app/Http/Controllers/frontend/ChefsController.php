<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChefsController extends Controller
{
    //
    public function chefs()
    {
        return view('frontend.chefs');
    }
}
