@extends('layouts.main')

@section('content')
    <h3 class="text-center mt-3 mb-3">Edit Ticket</h3>
    <div class="col-lg-12">
        <form method="POST" action="/tickets/update/{{ $ticket->id }}">
            @csrf
            <div class="form-group mb-3">
                <label for="name">Destination Name</label>
                <input type="name" class="form-control" id="name" placeholder="Enter a Name" name="name" required disabled
                    value="{{ old('name', $ticket->name) }}">
            </div>

            <div class="form-group mb-3">
                <label for="full_name">Full Name</label>
                <input type="name" class="form-control" placeholder="Enter Full Name" name="full_name" required
                    value="{{ old('full_name', $ticket->full_name) }}">
            </div>

            <div class="form-group mb-3">
                <label for="email">Email</label>
                <input type="name" class="form-control" placeholder="Enter a Email" name="email" required
                    value="{{ old('email', $ticket->email) }}">
            </div>

            <div class="form-group mb-3">
                <label for="phone_number">Phone Number</label>
                <input type="number" class="form-control" placeholder="Enter Phone Number" name="phone_number" required
                    value="{{ old('phone_number', $ticket->phone_number) }}">
            </div>

            <div class="form-group mb-3">
                <label for="nop">Number of Person</label>
                <input type="number" class="form-control" placeholder="Enter Number of Person" name="nop" required
                    value="{{ old('nop', $ticket->nop) }}">
            </div>

            <div class="form-group mb-3">
                <label for="price">Price</label>
                <input type="number" class="form-control" placeholder="Enter Price" name="price" required disabled
                    value="{{ old('price', $ticket->price) }}">
            </div>

            <div class="form-group mb-4">
                <label for="reservation">Reservation</label>
                <input type="date" class="form-control" id="reservation" placeholder="Enter a Reservation"
                    name="reservation" required value="{{ old('reservation', $ticket->reservation) }}">
            </div>

            <button type="submit" class="btn btn-primary mb-2">Save Ticket</button><br>
            <a class="btn btn-danger" href="/tickets/all">Back</a>
        </form>
    </div>
@endsection
