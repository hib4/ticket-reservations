@extends('layouts.main')

@section('content')
    <link href="{{ URL::asset('css/start.css') }}" rel="stylesheet" type="text/css">

    <div class="card text-center">
        <div class="card-body">
            <a href="/login" class="w-100 btn btn-lg btn-primary">Login</a>
            <a href="/register" class="w-100 btn btn-lg btn-primary">Register</a>
        </div>
    </div>
@endsection
