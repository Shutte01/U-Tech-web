@extends('dashboard.layouts.main')

@section('container')
    <div class="container my-4">
        <a href="/dashboard/news" class="btn btn-success"><span data-feather="chevron-left" class="align-middle"></span> Back to News</a>
        <a href="/dashboard/news/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit" class="align-middle"></span> Edit</a>
        <form action="/dashboard/news/{{ $post->slug }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="btn btn-danger" onclick="return confirm('Do you want to delete?')"><span data-feather="trash-2" class="align-text-bottom"></span> Delete</button>
        </form>
        <div class="row my-3">
            <div class="col-lg-10">
                <article>
                    <h2 style="font-weight: bold">{{ $post->title }}</h2>
                    <p><small class="text-muted">In <a href="/news?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a> {{ $post->created_at->diffForHumans() }}</small></p>
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