<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return response()->json(Post::all());
    }

    public function store(Request $request)
    {
        return Post::create($request->all());
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return $post;
    }
}
