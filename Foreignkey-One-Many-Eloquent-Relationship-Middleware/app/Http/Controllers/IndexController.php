<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Group;
use LDAP\Result;

class IndexController extends Controller
{
    // 
    public function index()
    {
        // return Member::all() to get the data of the member alll
       // return Member::find(1)->getGroup; to get the data with the help of the function getGroup and when you use find you have to mention the primary key in the member.php
    //return Member::with('getGroup')->get();to get the all the data with group and member both
        
        return Member::with('group')->get();
    }

    public function group()
    {
    return Group::with('member')->get();
    
     //return Group::get(); to get the data
    }



}
