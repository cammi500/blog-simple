<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    public  function scopeSearch($query ,$searchValue)
    {
        return $query
        ->when($searchValue,function ($query) use ($searchValue) {
            $query
            ->where(function($query) use ($searchValue) 
            {
               $query ->where('title', 'like','%' . $searchValue. '%')
                        ->orWhere('body', 'like','%' . $searchValue. '%');
            }); 
        });
        
        // if ($searchValue){
        //     $query
        //     ->where('title', 'like','%' . $searchValue. '%')
        //     ->orWhere('body', 'like','%' . $searchValue. '%');
        // }
        // return $query;
    }
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function author()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}