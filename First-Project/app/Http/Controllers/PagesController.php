<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
   //public function Showusers(string $id){

    //    return view('show',['id' =>$id]);
    //}

    public function Showusers(string $id){

        return view('show',compact('id'));
    }

    public function showblog(){
        return view('blog');
    }

    public function showdetail(){
        return view('detail');
    }
}
