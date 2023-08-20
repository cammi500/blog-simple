<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function index()
     {
        return view('blogs.index', [
            'blogs'=> Blog::with('category','author')
            ->latest()
            ->search(request('query'))
            ->get()
        ]
    );
    
}
    public function showCatBlogs(Category $category) {

        return view('blogs.index', [
        'blogs'=> $category->posts->load('category')
        ]
    );
    }
    public function show(Blog $blog) {
   
    return view('blogs.show',[
        // 'blog'=> Blog::where('slug',$slug)->first()
        'blog'=> $blog
    ]);
}

// public function getBlogs()
// {
//     if (request('query')){
//         $blogs =Blog::where('title', 'like','%' . request('query'). '%')->get();
//     }else {
//         $blogs =   Blog::with('category','author')->get();
//     }
//     return $blogs;
// }
public function showAuthorBlogs(User $author)
{
    return view('blogs.index',[
        'blogs'=> $author->blogs->load('category','author')
    ]);
}
}