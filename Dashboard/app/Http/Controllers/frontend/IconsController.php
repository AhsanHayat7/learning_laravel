<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IconsController extends Controller
{
    //
    public function bootstrap(){
        return view('frontend.dashboard.icons.icons-bootstrap');

    }

    public function boxicons(){
        return view('frontend.dashboard.icons.icons-boxicons');
        
    }

    public function remix(){
        return view('frontend.dashboard.icons.icons-remix');
        
    }











}


