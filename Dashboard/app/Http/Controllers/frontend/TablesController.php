<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TablesController extends Controller
{
    //
    public function data(){
        return view('frontend.dashboard.tables.tables-data');
    }

    public function general(){
        return view('frontend.dashboard.tables.tables-general');
    }


}
