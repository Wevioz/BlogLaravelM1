<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use App\Models\Category;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function getFormations($categoryId)
    {
        var_dump($categoryId);
        $formations = Formation::with('user')->where('categoryId', $categoryId)->get();

        $category = Category::with('user')->find($categoryId);

        return view('categories.detail', compact('formations', 'category'));
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
