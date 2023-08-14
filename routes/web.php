<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;



Route::get('/',[BlogController::class,'index'] );

Route::get('/blogs/{slug}',[BlogController::class,'show']);
Route::get('/contact-us', function () {
    return view('contacts.index');
});

Route::get('/about-us', function () {
    $name ='thiri aung';
    
    return view('about',[
        'myname' =>$name
    ]);
});