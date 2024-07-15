<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Carts;


class DetailController extends Controller
{
    //
    public function detail(){

        $userId = Auth::id();
        $cartItemsCount = Carts::where('user_id', $userId)->count();

        return view('web.boutique.details',compact('cartItemsCount'));
    }
}
