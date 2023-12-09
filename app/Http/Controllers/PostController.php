<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostDetailResource;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index()
    {
        $post = Post::all();
        return response()->json(['data' => $post]);
    }
    public function getResource()
    {
        $post = Post::all();
        return PostResource::collection($post);
    }
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return new PostDetailResource($post);
    }
}