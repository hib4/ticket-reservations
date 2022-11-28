@extends('layouts.main')

@section('content')
    <h3 class="text-center mt-3 mb-4">Destination</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Name</th>
                <th scope="col">City</th>
                <th scope="col">Country</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($destinations as $destination)
                <tr>
                    <td>{{ $destination->id }}</td>
                    <td>{{ $destination->name }}</td>
                    <td>{{ $destination->city }}</td>
                    <td>{{ $destination->country }}</td>
                    <td>{{ $destination->price }}</td>
                    <td>
                        <a type="button" class="btn btn-primary" href="/destinations/detail/{{ $destination->id }}">Detail</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection