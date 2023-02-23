@extends('layouts.main')

@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success col-lg-12" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <h2 class="text-center">Home</h2>
@endsection
