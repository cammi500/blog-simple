<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function index() {

        return view('blogs.index', [
            'blogs'=> Blog::with('category')->get()
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
}