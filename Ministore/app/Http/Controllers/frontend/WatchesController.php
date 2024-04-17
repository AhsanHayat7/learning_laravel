<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WatchesController extends Controller
{
    //

    public function watches(){
        return view('frontend.Ministore.watches');
    }
}
