<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        return response()->json(Tag::all());
    }

    public function store(Request $request)
    {
        return Tag::create($request->all());
    }

    public function show(Tag $tag)
    {
        return response()->json($tag);
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();

        return $tag;
    }
}
