<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        if (Auth::check()) {
            return view('dashboard.index');
        } else {
            return redirect()->route('login');
        }
    }

    public function charts(){
        return view('dashboard.chart');
    }

    public function tables(){
        return view('dashboard.table');
    }

    public function forms(){
        return view('dashboard.form');
    }

    public function calendar(){
        return view('dashboard.calendar');
    }

    public function maps(){
        return view('dashboard.map');
    }

    public function login(){
        return view('dashboard.login');
    }

    public function register(){
        return view('dashboard.register');
    }

    public function forget(){
        return view('dashboard.forget-pass');
    }

    public function buttons(){
        return view('dashboard.button');
    }

    public function badges(){
        return view('dashboard.badge');
    }
    public function tabs(){
        return view('dashboard.tab');
    }

    public function cards(){
        return view('dashboard.card');
    }
    public function  alerts(){
        return view('dashboard.alert');
    }

    public function progress(){
        return view('dashboard.progress-bar');
    }

    public function modal(){
        return view('dashboard.modal');
    }

    public function switches(){
        return view('dashboard.switch');
    }

    public function  grid(){
        return view('dashboard.grid');
    }

    public function font(){
        return view('dashboard.fontawesome');

    }
    public function typo(){
        return view('dashboard.typo');
    }
}
