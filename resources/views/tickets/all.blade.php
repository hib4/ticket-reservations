@extends('layouts.main')

@section('content')
    <h3 class="text-center mt-3 mb-4">My Ticket</h3>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-12" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Full Name</th>
                <th scope="col">Destination</th>
                <th scope="col">Number of Person</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tickets as $ticket)
                <tr>
                    <td>{{ $ticket->id }}</td>
                    <td>{{ $ticket->full_name }}</td>
                    <td>{{ $ticket->name }}</td>
                    <td>{{ $ticket->nop }}</td>
                    <td>{{ $ticket->price * $ticket->nop}}</td>
                    <td>
                        <a type="button" class="btn btn-primary" href="/tickets/detail/{{ $ticket->id }}">Detail</a>
                        <a type="button" class="btn btn-warning" href="/tickets/edit/{{ $ticket->id }}">Edit</a>
                        <form action="/tickets/delete/{{ $ticket->id }}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger"
                                onClick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection