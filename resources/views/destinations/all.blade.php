@extends('layouts.main')

@section('content')
    <h3 class="text-center mt-3 mb-4">Destinations</h3>

    <table>
        <div class="col-md-12 mb-2">
            <div class="row">
                <form action="/destinations/all">
                    <div class="col-md-4">
                        <select name="id" id="">
                            <option name="id" value="0"> -- Destinations -- </option>
                            @foreach ($destinations as $destination)
                                @if (request('id') == $destination->id)
                                    <option name="id" value="{{ $destination->id }}" selected>
                                        {{ $destination->name }}</option>
                                @else
                                    <option name="id" value="{{ $destination->id }}">{{ $destination->name }}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-8">
                        <div class="input-group mb-3">
                            <input class="form-control" type="text" name="search" id="search" placeholder="Search"
                                value="{{ request()->input('search') }}">
                            <button class="btn btn-primary" type="submit" id="search">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </table>

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
