<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $category =new Category();
        $category->name ='frontend';
        $category->slug='frontend';
        $category->save();
          $category2 =new Category();
        $category2->name ='backend';
        $category2->slug='backend';
        $category2->save();
        
       $blog =new Blog();
       $blog->title='html';
       $blog->body='body';
       $blog->slug='html';
       $blog->category_id=$category->id;
       $blog ->save();
       
       $blog2 =new Blog();
       $blog2->title='react';
       $blog2->body='body';
       $blog2->slug='react';
       $blog2->category_id=$category->id;
       $blog2 ->save();
       
       $blog2 =new Blog();
       $blog2->title='react';
       $blog2->body='body';
       $blog2->slug='react';
       $blog2->category_id=$category2->id;
       $blog2 ->save();
    }
}