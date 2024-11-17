@extends('layout.app')

@section('content')
<div class="container">
    <h1>Book a Room</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('booking.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Full name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="number" class="form-control" id="phone" name="phone" required>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type of Room</label>
            <input type="text" class="form-control" id="type" name="type" required>
        </div>
        <div class="mb-3">
            <label for="nroom" class="form-label">Number of Rooms</label>
            <input type="number" class="form-control" id="nroom" name="nroom" required>
        </div>
        <div class="mb-3">
            <label for="ndays" class="form-label">Duration</label>
            <input type="date" class="form-control" id="ndays" name="ndays" required>
        </div>
        <button type="submit" class="btn btn-primary">Book</button>
    </form>
</div>
@endsection