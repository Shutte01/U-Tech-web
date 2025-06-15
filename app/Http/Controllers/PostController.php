<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use PharIo\Manifest\Author;

class PostController extends Controller
{
    public function index()
    {
        return view('news', [
            'title' => 'News',
            // "posts" => Post::all()
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(10)->withQueryString(),
        ]);
    }


    public function show(Post $post)
    {
        return view('post', [
            'title' => 'News',
            'post' => $post,
        ]);
    }
}
