<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormsController extends Controller
{
    //
    public function editors(){
        
        return view('frontend.dashboard.forms.forms-editors');

    }

    public function elements(){
        
        return view('frontend.dashboard.forms.forms-elements');

    }

    public function layouts(){
        
        return view('frontend.dashboard.forms.forms-layouts');

    }

    public function validation(){
        
        return view('frontend.dashboard.forms.forms-validation');

    }


}
