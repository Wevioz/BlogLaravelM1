<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getCategories()
    {
        $categories = Category::with('user')->get();

        return view('categories.list', compact('categories'));
    }

    // public function addPost(Request $request) 
    // {
    //     $post = new Post;

    //     $post->ownerId = $request->input('ownerId'); 
    //     $post->title = $request->input('title');
    //     $post->content = $request->input('content');

    //     $post->save();
    // }
}
