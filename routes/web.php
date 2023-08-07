<?php

use App\Models\Blog;
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
    // $blogs = File::files(resource_path('/blogs'));
    // // $blogs =[
    // //     [
    // //         'title'=>' My First-blog',
    // //         'filename'=>'first-blog',
    // //         'intro'=>'lorem...',
    // //         'created_at'=>'2 6 2000',
    // //     ],
    // //     [
    // //         'title'=>' My Second-blog',
    // //         'filename'=>'Second-blog',
    // //         'intro'=>'lorem....',
    // //         'created_at'=>'2 6 2000',
    // //     ],
    // //     [
    // //         'title'=>' My Third-blog',
    // //         'filename'=>'Third-blog',
    // //         'intro'=>'lorem....',
    // //         'created_at'=>'2 6 2000',
    // //     ],
    // //     [
    // //         'title'=>' My Fourth-blog',
    // //         'filename'=>'Fourth-blog',
    // //         'intro'=>'lorem....',
    // //         'created_at'=>'2 6 2000',
    // //     ],
        
    // // ];
    // $blogContents =array_map(function($blogs){
    //     return $blogs->getContents();
    // }, $blogs);
   
    return view('home', [
        'blogs'=> Blog::all()
    ]
);
});
// Route::get('/blogs/first-blog', function () {
//     return view('blogs/first-blog');
// });
Route::get('/blogs/{filename}', function ($filename) {
   
    return view('blog',[
        'blog'=> Blog::find($filename)
    ]);
});
Route::get('/about-us', function () {
    return view('about');
});