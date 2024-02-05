<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts/index')->with(['posts' => $post]);
       //getPaginateByLimit()はPost.phpで定義したメソッドです。
    }
    
    public function show($post)
    {
        dd($post);
        return view('posts.show')->with(['post' => $post]);
    }
}

?>