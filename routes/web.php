<?php

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $blogs =[
        [
            'title'=>' My First-blog',
            'filename'=>'first-blog',
            'intro'=>'lorem...',
            'created_at'=>'2 6 2000',
        ],
        [
            'title'=>' My Second-blog',
            'filename'=>'Second-blog',
            'intro'=>'lorem....',
            'created_at'=>'2 6 2000',
        ],
        [
            'title'=>' My Third-blog',
            'filename'=>'Third-blog',
            'intro'=>'lorem....',
            'created_at'=>'2 6 2000',
        ],
        
    ];
    return view('home', [
        'blogs'=>$blogs
    ]
);
});
// Route::get('/blogs/first-blog', function () {
//     return view('blogs/first-blog');
// });
Route::get('/blogs/{filename}', function ($filename) {
   if( ! File::exists('../resources/views/blogs/'.$filename.".blade.php")){
    abort(404);
   }
    return view('blogs.' . $filename);
})->whereAlphaNumeric('filename');
Route::get('/about-us', function () {
    return view('about');
});