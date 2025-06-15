

@extends('layouts.main')

@section('container')
    <div class="container">
        <h1>Post Categories</h1>
        <div class="container">
            <div class="row">
                @foreach ($categories as $category)
                    <div class="col-md-4">
                        <a href="/news?category={{ $category->slug }}">
                            <div class="card text-bg-dark text-white">
                                <img src="{{ asset('img/bioloid.jpg') }}" class="card-img" alt="{{ $category->name }}"  style="width: 350px; height: 350px; object-fit: cover;">
                                <div class="card-img-overlay d-flex align-items-center p-0">
                                    <h5 class="card-title text-center flex-fill p-4" style="background-color: rgba(0,0,0,0.7)">{{ $category->name }}</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    
@endsection