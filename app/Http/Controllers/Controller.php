<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;

class Controller
{
    //
    public function index()
    {
     
        $posts = Post::with('user')->paginate(10);

        return view('feed', compact('posts'));
    }
}
