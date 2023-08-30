<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/',[BlogController::class,'index'] );

Route::get('/blogs/{blog:slug}',[BlogController::class,'show']);
Route::get('/login',[AuthController::class,'login']);
Route::post('/login',[AuthController::class,'loginStore']);
Route::get('/register',[AuthController::class,'create']);
Route::post('/register',[AuthController::class,'store']);
Route::post('/logout',[AuthController::class,'logout']);


Route::get('/contact-us', function () {
    return view('contacts.index');
});

Route::get('/about-us', function () {
    $name ='thiri aung';
    
    return view('about',[
        'myname' =>$name
    ]);
});