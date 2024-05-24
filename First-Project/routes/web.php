<?php

use Illuminate\Support\Facades\Route;


// Routes

Route::get('/', function () {
    return view('welcome');
})->name('home');


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
    return "<h1>Page not found <h2>.";
});