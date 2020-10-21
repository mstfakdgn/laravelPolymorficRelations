<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use App\Models\Video;
use Illuminate\Http\Request;

class TagVideoPostController extends Controller
{
    public function getTagVideo(Tag $tag)
    {
        return response()->json($tag->videos);
    }

    public function getTagPost(Tag $tag)
    {
        return response()->json($tag->posts);
    }

    public function attachTagVideo(Request $request, Tag $tag)
    {
        foreach ($request->videos as $video) {
            $tag->videos()->syncWithoutDetaching($video);
        }
        return response()->json($tag->videos);
    }

    public function attachTagPost(Request $request, Tag $tag)
    {
        foreach ($request->posts as $post) {
            $tag->posts()->syncWithoutDetaching($post);
        }
        return response()->json($tag->posts);
    }

    public function detachTagVideo(Tag $tag, Video $video)
    {
        $tag->videos()->detach($video);

        return response()->json($tag->videos);
    }

    public function detachTagPost(Tag $tag, Post $post)
    {
        $tag->posts()->detach($post);

        return response()->json($tag->posts);
    }
}
