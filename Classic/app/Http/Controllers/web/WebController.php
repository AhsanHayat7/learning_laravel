<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class WebController extends Controller
{
    //
    public function web(){
        $userId = Auth::id();
        return view('web.index');
    }

    public function about(){
        return view('web.about');
    }

    public function blog(){
        return view('web.blog');
    }

    public function contact(){
        return view('web.contact');
    }
}
