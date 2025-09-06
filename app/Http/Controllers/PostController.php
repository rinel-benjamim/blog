<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //

    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string|max:255',
        ]);

        auth()->user()->posts()->create([
            'content' => $request->content,
        ]);

        return redirect()->back()->with('success', 'Post created successfully.');
    }
}
