<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.news.index', [
            'posts' => Post::where('user_id', auth()->user()->id)->latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.news.create', [
            'categories' => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'category_id' => 'required',
            'image' => 'image|file|max:5108', // 5MB max = 5108KB
            'body' => 'required',
        ]);
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 100);
        
        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('news-images');
        }

        Post::create($validatedData);

        return redirect('/dashboard/news')->with('success', 'New post has been created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $news
     * @return \Illuminate\Http\Response
     */
    public function show(Post $news)
    {
        if($news->author->id !== auth()->user()->id) {
            abort(403);
        }
        return view('dashboard.news.show', [
            'post' => $news,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $news)
    {
        if($news->author->id !== auth()->user()->id) {
            abort(403);
        }
        return view('dashboard.news.edit', [
            'post' => $news,
            'categories' => Category::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $news)
    {
        $rules = [
            'title' => 'required|max:255',
            'category_id' => 'required',
            'image' => 'image|file|max:5108', // 5MB max = 5108KB
            'body' => 'required',
        ];

        if($request->slug != $news->slug) {
            $rules['slug'] = 'required|unique:posts';
        }

        $validatedData = $request->validate($rules);

        if($request->file('image')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('news-images');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 100);

        Post::where('id', $news->id)
            ->update($validatedData);

        return redirect('/dashboard/news')->with('success', 'Post has been edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $news)
    {
        if($news->image) {
            Storage::delete($news->image);
        }
        Post::destroy($news->id);
        return redirect('/dashboard/news')->with('success', 'Post has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
