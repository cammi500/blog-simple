<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    public  function scopeFilter($query ,$filters)
    {
     $query
        ->when($filters['search'] ?? null,function ($query) use ($filters) {
            $query
            ->where(function($query) use ($filters) {
               $query ->where('title', 'like','%' . $filters['search']. '%')
                        ->orWhere('body', 'like','%' . $filters['search']. '%');
            }); 
        });
        
        $query
        ->when($filters['category'] ?? null,function ($query) use ($filters) {
                $query->whereHas('category',function ($catQuery) use ($filters) {
                    $catQuery->whereSlug($filters['category']);
                });
                    
        });
        
        $query
        ->when($filters['author'] ?? null,function ($query) use ($filters) {
            $query->whereHas('author',function ($autQuery) use ($filters) {
                $autQuery->whereUsername($filters['author']);
            });
                
    });
    }
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function author()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function subscribedUsers(){
        return $this->belongsToMany(User::class,'blogs_users');
    }
    public function isSubscribed(){
        return $this->subscribedUsers->contains('id',auth()->id());
    }
}