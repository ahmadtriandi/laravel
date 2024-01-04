<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PostController extends Controller
{
    public function index()
    { 
     $title = '';
     if(request('category')) {
        $category = Category::firstWhere('slug', request('category'));
        $title = 'In ' . $category->name;
    
     }

     if(request('author')) {
        $author = User::firstWhere('username', request('author'));
        $title = 'By. ' . $author->name;
    
     }

     

        
    return view('posts', [
        "title" => " $title",
        "active" => "Posts",
        "posts" => Post::latest()->filter(request(['search','category','author']))->paginate(5)->withQueryString()
    ]);
    }

public function show($slug)
    {
        return view('post', [
            "title" => "All  Post",
            "active" => "posts",
            "post" => Post::find($slug)
        ]);   
}
}



