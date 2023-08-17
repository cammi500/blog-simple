@props(['loop','blog'])

<div class="{{$loop->last ? 'bg-yellow' : ''}}">
    <h1><a href="/blogs/{{$blog->slug}}">{{$blog->title}}</a></h1>
    <p>
        {{!!$blog->body!!}}
    </p>
    <p>published at - {{ $blog->created_at}}</p>
    <p>Category - <a href="/categories/{{$blog->category->slug}}">{{$blog->category->name}}</a></p>
   </div>