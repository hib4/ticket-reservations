@extends('layouts.main')

@section('content')
    <h3 class="text-center mt-3 mb-3">Book Ticket {{ $destination->name }}</h3>
    <div class="col-lg-12">
        <form method="POST" action="/tickets/add">
            @csrf
            <input type="hidden" class="form-control" id="destination_id" name="destination_id" required
                value="{{ $destination->id }}">

            <input type="hidden" class="form-control" id="name" name="name" required
                value="{{ $destination->name }}">

            <input type="hidden" class="form-control" id="price" name="price" required
                value="{{ $destination->price }}">

            <div class="form-group mb-3">
                <label for="full_name">Full Name</label>
                <input type="name" class="form-control" id="full_name" placeholder="Enter Full Name" name="full_name"
                    required value="{{ old('full_name') }}">
            </div>

            <div class="form-group mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter a Email" name="email"
                    required value="{{ old('email') }}">
            </div>

            <div class="form-group mb-3">
                <label for="phone_number">Phone Number</label>
                <input type="number" class="form-control" id="phone_number" placeholder="Enter a Phone Number"
                    name="phone_number" required value="{{ old('phone_number') }}">
            </div>

            <div class="form-group mb-3">
                <label for="nop">Number of Person</label>
                <input type="number" class="form-control" id="nop" placeholder="Enter a Number of Person"
                    name="nop" required value="{{ old('nop') }}">
            </div>

            <div class="form-group mb-3">
                <label for="reservation">Reservation</label>
                <input type="date" class="form-control" id="reservation" placeholder="Enter a Reservation"
                    name="reservation" required value="{{ old('reservation') }}">
            </div>

            <button type="submit" class="btn btn-primary">Book now</button>
        </form>
    </div>
@endsection
