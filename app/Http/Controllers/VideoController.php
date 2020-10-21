<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        return response()->json(Video::all());
    }

    public function store(Request $request)
    {
        return Video::create($request->all());
    }

    public function show(Video $video)
    {
        return response()->json($video->tags);
    }

    public function destroy(Video $video)
    {
        $video->delete();

        return $video;
    }
}
