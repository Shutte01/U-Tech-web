@extends('layouts.main')

@section('container')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <main class="form-signup w-100 m-auto">
                    <form action="/signup" method="POST">
                        @csrf
                        <div class="d-block text-center">
                            <img class="mb-4" src="{{ asset('img/logo-utech.png') }}" alt="U-Tech" width="72" height="auto">
                        </div>
                        <h1 class="h3 mb-3 fw-normal text-center">Sign Up</h1>
                        <div class="form-floating">
                            <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="name" required value="{{ old('name') }}">
                            <label for="name">Name</label>
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="username" required value="{{ old('username') }}">
                            <label for="username">Username</label>
                            @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                            <label for="email">Email address</label>
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                            <label for="password">Password</label>
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Sign Up</button>
                    </form>
                    <small>Already have an account? <a href="/signin">Sign In</a></small>
                </main>
            </div>
        </div>
    </div>

@endsection