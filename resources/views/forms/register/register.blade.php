@extends('layouts.main')

@section('content')
    <link href="{{ URL::asset('css/login.css') }}" rel="stylesheet" type="text/css">

    <main class="form-signin m-auto">
        <form method="POST" action="/register">
            @csrf
            <h1 class="h3 mb-3 fw-normal">Register</h1>
            <div class="form-floating">
                <input type="name" name="name" class="form-control" id="floatingInput" placeholder="Alex">
                <label for="floatingInput">Nama Lengkap</label>
            </div>

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
            <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button><br><br>

            <p class="text-center">Already have an account? <a href="/login">Login</a></p>
        </form>
    </main>
@endsection
