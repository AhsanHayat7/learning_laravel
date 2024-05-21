<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\TestingController;

// Routes

// Basic Routing

Route::get('/', function () {
    return view('index');
});

Route::get('/Aboutt', function () {
    return view('Aboutt');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/contact', function () {
    return view('contact');
});
//Route::get('/about', function(){
//    return view('about');
//});

Route::get('/test', function(){
    return view('about');
});

// redirect command
//Route::redirect('/about','/test');

// {{route()}}
Route::get('/post/here/want/lala', function(){
    return view('post');
})->name('mypost');

//Route::get('/post/firstpost', function(){
//    return view('firstpost');
//});


//Route::view('/post', 'post');

//Route::get('/hello', function(){
//    return view('post');
//});


//Route::get('/post/{id?}/comment/{commentid?}/email/{emailid?}', function (string $id = null, string $comment= null, string $email= null){

//   if($id){
//      return "<h1>Post ID : " . $id . "</h1><h2>" . $comment . "</h2><h3>" . $email . "</h3>";

//  }else{
//       return "<h1>Post ID not found.</h1> ";
//   }
//});





// Routing and constraints

Route::get('/post/{id}/comment/{commentid}', function (string $id =null ,$comment = null ){

   if($id){

        return "<h1>Post ID : " . $id . " & comment : ". $comment ."</h1>";

   }else{
           return "<h1>Post ID not found.</h1> ";
       }
   })->where('id','[0-9]+')->whereAlpha('commentid');



Route::get('/admin/{id}/services/{servicesid}', function (String $id = null ,string $services = null ){
    if($id){
        return "<h1>Admin Id :" . $id ."& services : ". $services . "</h1>";
    }else{
        return "<h2>Admin id: Not Found </h2>";
    }
})->where('id','[0-11]+')->whereAlphaNumeric('servicesid');

// whereAlpha
// whereAlphaNumeric
// whereIn('id',['movie','song','painting'])
// where->('id','[0-9] +')
// where->('id','[a-zA-z]+');
// ->whereIn('id',['Movie','song','painting']);
//where('id','[a-zA-z]+');

//Route::get('/post/{id}', function (string $id){
//    return "<h1> Post ID : " . $id . "</h1>";
//});



//Route::get('/post/{id?}/book/{bookid?}', function (string $id = null, string $bookid = null){
//    if($id){
//        return "<h1> Post id : " . $id . "<h1><h2>" . $bookid . "<h2>";
//    }else{
//        return "<h2> Post id : Not found ";
//    }
//});



// Groups

Route::prefix('Page')->group(function(){
    Route::get('/gallery', function (){
        return view('gallery');
    });

    Route::get('/about', function(){
        return view('about');
    });
    Route::get('/post/firstpost', function(){
        return view('firstpost');
    });
});

Route::fallback(function(){
    return "<h1> Page Not found.<h2>";
});



Route::get('/post/{id?}/name/{nameid?}', function(string $id = null ,string $nameid = null){

    if($id){
        return "<h1> Post id:" . $id . "</h1><h2>" . $nameid ."</h2>";
    }else{
        return "<h2> Post Id not found";
    }

});



Route::prefix('admin')->group(function (){

    Route::get('/form', function (){
        return view('gallery');
    });

    Route::get('/register', function(){
        return view('about');
    });
    Route::get('/dashboard/table', function(){
        return view('firstpost');
    });
});


Route::get('/second', function(){
    return view('second');
});



// Js in blade template

Route::get('/test', function(){
    return view('test');
});

// arrays
// varailbles
Route::get('/users',function(){
    $web = "laravel framework";
    $languages = "";
    $names = getUser();
    //$names = [1=>['name'=>'LAla','phone'=>'1313213','city'=>'karachi'],
              //2=>['name'=>'Maksan','phone'=>'9088231','city'=>'Lahore'],
              //3=>['name'=>'Raja','phone'=>'532222','city'=>'Islamabad'],
              //4=>['name'=>'shubh','phone'=>'914214','city'=>'Peshawar'], ];
    //$msg="<script>alert('Php laravel')</script>";
    $Alert="<script>alert('Php laravel')</script>";
    return view('users', ['user'=> $web, 'lang'=> $languages,'Alert'=> "<script>alert('Php laravel')</script>", 'info'=>$names]);

    //return view('users')->with('user', $web)->with('lang',$languages)->with('Alert',$msg);
    //return view('users')->withuser($web)->withlang($languages)->withAlert($Alert);
});

Route::get('/user/{id}',function($id){
    $users = getUser();
    abort_if(!isset($users[$id]),404);
    $user = $users[$id];

    return  view('user', ['id'=>$user]);
})->name('user');


function getUser(){

 return $names = [1=>['name'=>'LAla','phone'=>'1313213','city'=>'karachi'],
              2=>['name'=>'Maksan','phone'=>'9088231','city'=>'Lahore'],
              3=>['name'=>'Raja','phone'=>'532222','city'=>'Islamabad'],
              4=>['name'=>'shubh','phone'=>'914214','city'=>'Peshawar'], ];
};
// controllers
Route::controller(PagesController::class)->group(function(){
    Route::get('/show', 'Showusers')->name('show');
    Route::get('/show/{id}','Showusers');
    Route::get('/blog','showblog')->name('blog');
    Route::get('/detail','showdetail')->name('detail');
});

Route::get('/test',TestingController::class);
