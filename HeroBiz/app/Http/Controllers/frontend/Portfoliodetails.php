<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Portfoliodetails extends Controller
{
    //
    public function portfoliodetails()
    {
        return view('frontend.portfolio-details');
    }
}
