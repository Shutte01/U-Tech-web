
@extends('layouts.main')

@section('container')
    <div class="container my-5">
        <div class="row justify-content-center mb-5">
            <div class="col-md-10">
                <article>
                    <h2 style="font-weight: bold">{{ $post->title }}</h2>
                    <p><small class="text-muted">by <a href="/news?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/news?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a> {{ $post->created_at->diffForHumans() }}</small></p>
                    @if ($post->image)
                        <img src="{{ asset('storage') . '/' . $post->image }}" alt="{{ $post->slug }}" class="img-fluid" style="height: 400px; width:1200px; object-fit:cover; overflow: hidden;">
                    @else
                        <img src="{{ asset('img/bioloid.jpg') }}" alt="{{ $post->slug }}" class="img-fluid" style="height: 400px; width:1200px; object-fit:cover;">
                    @endif
                    <article class="my-4" style="font-size: 17px; line-height: 1.5;">
                        {!! $post->body !!}
                    </article>
                </article>
                {{-- <a href="/news" class="mt-3" style="text-align: left">Back to News</a> --}}
            </div>
        </div>
    </div>
@endsection