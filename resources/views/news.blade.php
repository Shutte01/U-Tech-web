

@extends('layouts.main')

@section('container')
<div>
    <div class="gradient-news"></div>
    <img class="bg-image" src="{{ asset('img/background-news.jpg') }}" alt="news"  style="width: 100%; height: 100vh; object-fit: cover; object-postion: center center; position: fixed; z-index: -2; top: 0; left: 0; overflow: hidden;">
    <div id="container-news" class="container mt-5" style="z-index: 2; postion: absolute;">
        <div class="row justify-content-center mb-3">
            <div class="col-md-8">
                <form action="/news">
                    @if (request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">  
                    @endif
                    @if (request('author'))
                        <input type="hidden" name="author" value="{{ request('author') }}">  
                    @endif
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
                        <div class="input-group-append">
                            <button class="btn btn-secondary" type="submit">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        @if ($posts->count())
            @foreach ($posts as $post)
                <article>
                    <div class="grid-container-news mb-5">
                        <div style="position: relative;">
                            @if ($post->image)
                                <img src="{{ asset('storage') . '/' . $post->image }}" alt="{{ $post->slug }}" class="img-fluid" style="width: 512px; height: 256px; object-fit: cover; border-radius: 15px;">
                            @else
                                <img src="{{ asset('img/bioloid.jpg') }}" alt="{{ $post->slug }}" class="img-fluid" style="width: 512px; height: 256px; object-fit: cover; border-radius: 15px; ">
                            @endif
                        </div>
                        <div>
                            <div>
                                <h2>
                                    <a href="/news/{{ $post->slug }}" class="text-decoration-none text-light">{{ $post->title }}</a>
                                </h2>
                            </div>
                            <div>
                                <p style="color: white">by <a href="/news?author={{ $post->author->username }}" class="text-decoration-none text-light">{{ $post->author->name }}</a> in <a href="/news?category={{ $post->category->slug }}" class="text-decoration-none text-light">{{ $post->category->name }}</a> {{ $post->created_at->diffForHumans() }}</p>
                                <p style="color: white">{{ $post->excerpt }}</p>
                                <a href="/news/{{ $post->slug }}" class="text-decoration-none btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                </article>
            @endforeach
        @else
            <p class="text-center fs-4">News not found</p>
        @endif
    </div>
    <div class="pagination-news py-4" style="background-color: #3a3a3a00;">
        <div class="d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    </div>
</div>

@endsection