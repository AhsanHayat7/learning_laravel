<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    

  
    //
    public function upload(Request $request)
    {

        $file = $request->file('image');
        $filename = time() . "-product." . $file->getClientOriginalExtension();
        $imagePath = 'uploads/';

        $file->move(public_path($imagePath), $filename);

        echo $imagePath . $filename;

        #$fileName = time(). "-product." .$request->file('image')->getClientOriginalExtension();
        #echo $request->file('image')->storeAs('public/uploads', $fileName);
        

    }
}
