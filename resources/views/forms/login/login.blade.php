@extends('layouts.main')

@section('content')
    <link href="{{ URL::asset('css/login.css') }}" rel="stylesheet" type="text/css">

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-12" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <main class="form-signin m-auto">
        <form method="POST" action="/login">
            @csrf
            <h1 class="h3 mb-3 fw-normal">Please Login</h1>
            <div class="form-floating">
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button><br><br>

            <p class="text-center">Don't have an account yet? <a href="/register">Register</a></p>
        </form>
    </main>
@endsection
