<?php

namespace App\Http\Controllers;

use App\Models\Post;

class Controller
{
    //
    public function index()
    {
        $posts = Post::paginate(10);

        return view('feed', compact('posts'));
    }
}
