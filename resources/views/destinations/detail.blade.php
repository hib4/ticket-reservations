@extends('layouts.main')

@section('content')
    <h2 class="text-center mt-3 mb-4">Detail Destination</h2>
    <div class="col-lg-12">
        <form>
            <div class="text-center">
                <img class="rounded-1" src="{{ $destination->image }}" width="400" height="250">
            </div>
            <div class="form-group mb-3">
                <label for="name">Name</label>
                <input type="name" class="form-control" placeholder="Enter Name" name="name" required disabled
                    value="{{ $destination->name }}">
            </div>
            <div class="form-group mb-3">
                <label for="description">Description</label>
                <input type="name" class="form-control" placeholder="Enter Description" name="description" required disabled
                    value="{{ $destination->description }}">
            </div>
            <div class="form-group mb-3">
                <label for="city">City</label>
                <input type="name" class="form-control" placeholder="Enter City" name="city" required disabled
                    value="{{ $destination->city }}">
            </div>
            <div class="form-group mb-3">
                <label for="country">Country</label>
                <input type="name" class="form-control" placeholder="Enter Country" name="country" required disabled
                    value="{{ $destination->country }}">
            </div>
            <div class="form-group mb-4">
                <label for="price">Price</label>
                <input type="name" class="form-control" placeholder="Enter Price" name="price" required disabled
                    value="{{ $destination->price }}">
            </div>
    
            <a class="btn btn-primary mb-2" href="/tickets/create/{{ $destination->id }}">Book tickets now</a><br>
            <a class="btn btn-danger" href="/destinations/all">Back</a>
        </form>
    </div>
@endsection
