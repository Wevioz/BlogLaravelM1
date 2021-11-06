<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getPosts()
    {
        $posts = Post::all();

        return view('posts.list', compact('posts'));
    }

    public function addPost(Request $request) 
    {
        $post = new Post;

        $post->ownerId = $request->input('ownerId'); 
        $post->title = $request->input('title');
        $post->content = $request->input('content');

        $post->save();
    }
}
