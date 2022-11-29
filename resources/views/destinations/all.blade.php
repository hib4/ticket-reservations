@extends('layouts.main')

@section('content')
    <h3 class="text-center mt-3 mb-4">Destination</h3>

    <div class="row">
        @foreach ($destinations as $destination)
            <div class="card m-3" style="width: 18rem;">
                <img src="{{ $destination->image }}" class="card-img-top mt-2" alt="...">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{ $destination->name }}</h5>
                    <p class="card-text">{{ $destination->description }}</p>
                    <div class="mt-auto">
                        <a href="/destinations/detail/{{ $destination->id }}" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
