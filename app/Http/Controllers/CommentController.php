<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Blog $blog)
    {
        $cleanData = request()->validate([
            'body' => 'required'
        ]);

        $cleanData['user_id'] = auth()->id();
        $blog->comments()->create($cleanData);
        return back();
    }
    public function delete(Blog $blog)
    {
        $blog->comments->delete();
    }
}