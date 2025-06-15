<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'title' => 'Home',
            'posts' => Post::latest()->get(),
        ]);
    }

    // public function show(Post $post)
    // {
    //     return view('post', [
    //         'title' => 'News',
    //         'post' => $post,
    //     ]);
    // }
}
