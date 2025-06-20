@extends('layouts.main')

@section('container')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if(session()->has('signinError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('signinError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <main class="form-signin w-100 m-auto">
                    <form action="/signin" method="POST">
                        @csrf
                        <div class="d-block text-center">
                            <img class="mb-4" src="{{ asset('img/logo-utech.png') }}" alt="U-Tech" width="72" height="auto">
                        </div>
                        <h1 class="h3 mb-3 fw-normal text-center">Sign In</h1>
                        <div class="form-floating">
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                            <label for="email">Email address</label>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                            <label for="password">Password</label>
                        </div>
                        {{-- <div class="checkbox mb-3">
                            <label>
                                <input type="checkbox" value="remember-me"> Remember me
                            </label>
                        </div> --}}
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                    </form>
                    {{-- <small>Don't have an account? <a href="/signup">Sign Up</a></small> --}}
                </main>
            </div>
        </div>
    </div>

@endsection