<?php

namespace App\Http\Controllers;
use App\Models\Member;
use App\Models\Group;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class IndexController extends Controller
{
    public function index()

    {   
        return "<pre>" . Member::with('group')->get() . "</pre>";
    }

    public function group()
    {
        return Group::with('members')->get();
    }

    
}
