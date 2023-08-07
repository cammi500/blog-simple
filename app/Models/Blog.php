<?php
namespace App\Models;
use Illuminate\Support\Facades\File ;

class Blog
{
    public static function all(){
    $blogs = File::files(resource_path('/blogs'));
    $blogContents =array_map(function($blogs){
        return $blogs->getContents();
    }, $blogs);
    return $blogContents;
    }

    public static function find($filename)
    {
        $path = resource_path('/blogs/'.$filename .".html");
        if( ! File::exists($path)) {
         abort(404);
        }
        $blog = file_get_contents($path);
        return $blog;
    }
}