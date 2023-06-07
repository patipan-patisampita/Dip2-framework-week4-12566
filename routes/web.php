<?php

use Illuminate\Support\Facades\Route;


//http://127.0.0.1:8000/
Route::get('/', function () {
    return view('welcome');
});

//http://127.0.0.1:8000/about
Route::get('/about', function () {
    return view('/about');
});

//http://127.0.0.1:8000/contact
Route::get('/contact', function () {
    return view('contact');
});

//Route parameter
Route::get('/post/{id}', function (string $id) {
    // return view('post');
    return '<h1>Post ID:'.$id.'</h1>';
});

//Optional parameter
Route::get('/post/{id?}/comment/{commentid?}',
function (string $id = null,string $comment=null) {
    if($id){
        return '<h1>Post ID:'.$id.'</h1><h2>Comment: '.$comment.'</h2>';
    }
    else{
        return '<h1>No ID Found</h1>';
    }
});

//Regular Expression parameter
Route::get('/blog/{id}',function (string $id) {
    if($id){
        return '<h1>Post ID:'.$id.'</h1>';
    }
    else{
        return '<h1>No ID Found</h1>';
    }
})->where('id','[a-zA-Z]+');
// })->where('id','[0-9]+');
// })->whereIn('id',['movie','song','mark']);

