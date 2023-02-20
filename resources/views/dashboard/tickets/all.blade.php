@extends('dashboard.layouts.main')

@section('content')
    <h3 class="text-center mt-3 mb-4">My Tickets</h3>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-12" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-striped table-hover">
        <div class="col-md-12">
            <div class="row">
                <form action="/dashboard/tickets/all">
                    <div class="col-md-4">
                        <select name="destination_id" id="">
                            <option name="destination_id" value="0"> -- Destinations -- </option>
                            @foreach ($destinations as $destination)
                                @if (request('destination_id') == $destination->id)
                                    <option name="destination_id" value="{{ $destination->id }}" selected>
                                        {{ $destination->name }}</option>
                                @else
                                    <option name="destination_id" value="{{ $destination->id }}">{{ $destination->name }}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-8">
                        <div class="input-group mb-3">
                            <input class="form-control" type="text" name="search" id="search" placeholder="Search" value="{{ request()->input('search') }}">
                            <button class="btn btn-primary" type="submit" id="search">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Full Name</th>
                <th scope="col">Destination</th>
                <th scope="col">Number of Person</th>
                <th scope="col">Price</th>
                <th scope="col">Discount</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $index = $tickets->firstItem();
            @endphp

            @foreach ($tickets as $ticket)
                @php
                    $price = $ticket->destination->price * $ticket->nop;
                    $discount = $ticket->destination->price * $ticket->nop * $ticket->destination->discount;
                @endphp

                <tr>
                    <td>{{ $index++ }}</td>
                    <td>{{ $ticket->full_name }}</td>
                    <td>{{ $ticket->destination->name }}</td>
                    <td>{{ $ticket->nop }}</td>
                    <td>{{ $price }}</td>
                    <td>{{ $discount }}</td>
                    <td>
                        <a type="button" class="btn btn-primary"
                            href="/dashboard/tickets/detail/{{ $ticket->id }}">Detail</a>
                        <a type="button" class="btn btn-warning"
                            href="/dashboard/tickets/edit/{{ $ticket->id }}">Edit</a>
                        <form action="/dashboard/tickets/delete/{{ $ticket->id }}" method="POST" class="d-inline">
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

    @if ($tickets->isEmpty())
        <h5 class="text-center">Data not found</h5>
    @endif

    {{ $tickets->links() }}
@endsection
