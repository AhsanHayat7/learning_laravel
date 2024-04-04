<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComponentsController extends Controller
{
    //
    public function accordion(){
        return view('frontend.dashboard.components.components-accordion');
    }


    public function alerts(){
        return view('frontend.dashboard.components.components-alerts');
    }


    public function badges(){
        return view('frontend.dashboard.components.components-badges');
    }

    public function breadcrumbs(){
        return view('frontend.dashboard.components.components-breadcrumbs');
    }

    public function buttons(){
        return view('frontend.dashboard.components.components-buttons');
    }


    public function cards(){
        return view('frontend.dashboard.components.components-cards');
    }


    public function carousel(){
        return view('frontend.dashboard.components.components-carousel');
    }


    public function listgroup(){
        return view('frontend.dashboard.components.components-list-group');
    }

    public function modal(){
        return view('frontend.dashboard.components.components-modal');
    }

    public function pagination(){
        return view('frontend.dashboard.components.components-pagination');
    }

    
    public function progress(){
        return view('frontend.dashboard.components.components-progress');
    }


    public function spinners(){
        return view('frontend.dashboard.components.components-spinners');
    }

    public function tabs(){
        return view('frontend.dashboard.components.components-tabs');
    }

    public function tooltips(){
        return view('frontend.dashboard.components.components-tooltips');
    }
}


