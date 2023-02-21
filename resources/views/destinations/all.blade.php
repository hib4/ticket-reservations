@extends('layouts.main')

@section('content')
    <h3 class="text-center mt-3 mb-5">Destinations</h3>

    <div class="row gap-5 mb-4">
        @foreach ($destinations as $destination)
            <div class="card" style="width: 420px;">
                <img src="https://source.unsplash.com/800x400?destinations" class="card-img-top mt-2" alt="...">
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

    <div class="mb-3">
        {{ $destinations->links() }}
    </div>
@endsection
