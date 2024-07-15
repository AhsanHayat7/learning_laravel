<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Blogs;
class WebController extends Controller
{
    //
    public function index(){
        $blogs = blogs::all();
        return view('web.index',compact('blogs'));
    }

    public function about(){
        $blogs = blogs::all();
        return view('web.about',compact('blogs'));
    }

    public function blog(){
        $blogs = blogs::all();
        return view('web.blog',compact('blogs'));
    }

    public function contact(){
        return view('web.contact');
    }
}
