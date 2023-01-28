@extends('dashboard.layouts.main')

@section('content')
    <h2 class="text-center mt-3 mb-3">Detail Ticket</h2>
    <form>
        <div class="form-group mb-3">
            <label for="name">Destination Name</label>
            <input type="name" class="form-control" placeholder="Enter Name" name="name" required disabled
                value="{{ $ticket->destination->name }}">
        </div>

        <div class="form-group mb-3">
            <label for="full_name">Full Name</label>
            <input type="name" class="form-control" placeholder="Enter Full Name" name="full_name" required disabled
                value="{{ $ticket->full_name }}">
        </div>

        <div class="form-group mb-3">
            <label for="email">Email</label>
            <input type="name" class="form-control" placeholder="Enter a Email" name="email" required disabled
                value="{{ $ticket->email }}">
        </div>

        <div class="form-group mb-3">
            <label for="phone_number">Phone Number</label>
            <input type="name" class="form-control" placeholder="Enter Phone Number" name="phone_number" required
                disabled value="{{ $ticket->phone_number }}">
        </div>

        <div class="form-group mb-3">
            <label for="nop">Number of Person</label>
            <input type="name" class="form-control" placeholder="Enter Number of Person" name="nop" required disabled
                value="{{ $ticket->nop }}">
        </div>

        <div class="form-group mb-3">
            <label for="price">Price</label>
            <input type="name" class="form-control" placeholder="Enter Price" name="price" required disabled
                value="{{ $ticket->destination->price }}">
        </div>

        <div class="form-group mb-3">
            <label for="discount">Discount</label>
            <input type="name" class="form-control" placeholder="Enter Discount" name="discount" required disabled
                value="{{ $ticket->destination->discount }}">
        </div>

        <div class="form-group mb-4">
            <label for="reservation">Reservation</label>
            <input type="date" class="form-control" id="reservation" placeholder="Enter a Reservation" name="reservation"
                required disabled value="{{ $ticket->reservation }}">
        </div>

        <a class="btn btn-danger" href="/dashboard/tickets/all">Back</a>
    </form>
@endsection
