<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($id)
    {
        $post = \App\Post::findOrFail($id);

        $this->authorize($post, 'view');

        return view('post_show', compact('post'));
    }
}
