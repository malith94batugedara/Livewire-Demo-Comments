<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    public function show(Post $post): View
    {
        $post->load('comments');

        return view('posts.show', [
            'post' => $post
        ]);
    }
}
