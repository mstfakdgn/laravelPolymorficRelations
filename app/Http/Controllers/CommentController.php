<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        return response()->json(Comment::all());
    }

    public function store(Request $request)
    {
        return Comment::create($request->all());
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();

        return $comment;
    }

    public function show(Comment $comment)
    {
        return response()->json($comment->commentable);
    }
}
