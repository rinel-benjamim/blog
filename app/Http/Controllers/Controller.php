<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;

class Controller
{
    //
    public function index()
    {
     
        $posts = Post::with('user')->orderBy('created_at', 'desc')->paginate(3);

        return view('feed', compact('posts'));
    }
}
