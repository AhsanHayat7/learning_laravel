<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChartsController extends Controller
{
    //
    public function apexcharts(){
        
        return view('frontend.dashboard.charts.charts-apexcharts');
    }
    public function chartjs(){
        
        return view('frontend.dashboard.charts.charts-chartjs');
    }
    public function echarts(){
        
        return view('frontend.dashboard.charts.charts-echarts');
    }
}
