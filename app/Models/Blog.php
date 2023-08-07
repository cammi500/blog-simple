<?php
namespace App\Models;
use Illuminate\Support\Facades\File ;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Blog
{
    public function __construct(public $title,public $slug,public $intro,public $created_at,public $body)
    {
        
    }

    
    public static function all(){
    $blogs = File::files(resource_path('/blogs'));
    $blogContents =array_map(function($blogs){
        $content = $blogs->getContents();
       $yaml = YamlFrontMatter::parse($content);
    //    dd($yaml->body());
    return new Blog($yaml->title,$yaml->slug,$yaml->intro,$yaml->created_at,$yaml->body());
    }, $blogs);
    
    // dd($blogContents);
    return collect($blogContents) ;
    }
 
    public static function find($slug)
    {
        // $path = resource_path('/blogs/'.$slug .".html");
        // if( ! File::exists($path)) {
        //     abort(404);
        // }
        // $blog =cache()->remember('blog_' .$slug ,now()->addSeconds(3),function( ) use($path){
        //     return file_get_contents($path);
        // });
        
        
        return static::all()->firstWhere('slug',$slug) ;
    }
    public static function findOrFail($slug)
    {
        if(!$blog = static::find($slug) ){
            abort(404);
        }
        return $blog;
    }
}