<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogdetailsController extends Controller
{
    //
    public function blogdetails()
    {
        return view('frontend.blog-details');
    }
}
