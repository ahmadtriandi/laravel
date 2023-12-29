<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PostController extends Controller
{
    public function index()
    {
       

        $post = Post::latest();

        if(request('search')) {
            $post->where('title', 'like', '%' .request('search'). '%')->orWhere('body', 'like', '%' .request('search'). '%');
        }
    return view('posts', [
        "title" => " All Posts",
        "active" => "Posts",
        "posts" => $post->get()
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
