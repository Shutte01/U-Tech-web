

@extends('layouts.main')

@section('container')
    <h1>Post Category: {{ $category }}</h1>
    @foreach ($posts as $post)
        <article class="mb-5">
            <h2>
                <a href="/news/{{ $post->slug }}">{{ $post->title }}</a>
            </h2>
            <p>{{ $post->excerpt }}</p>
        </article>
        
    @endforeach

@endsection