@extends('layout.app')

@section('content')
<div class="container">
    <h1>Service Details</h1>

    <div class="mb-3">
        <strong>Full Name:</strong> {{ $booking->name }}
    </div>
    <div class="mb-3">
        <strong>Email:</strong> {{ $booking->email }}
    </div>
    <div class="mb-3">
        <strong>Phone:</strong> {{ $booking->phone }}
    </div>
    <div class="mb-3">
        <strong>Type of Room:</strong> {{ $booking->type }}
    </div>
    <div class="mb-3">
        <strong>Number of Room:</strong> {{ $booking->nroom}}
    </div>
    <div class="mb-3">
        <strong>Duration:</strong> {{ $booking->ndays }}
    </div>

    <a href="{{ route('booking.index') }}" class="btn btn-secondary">Back to Bookings</a>
    <a href="{{ route('booking.edit', $booking) }}" class="btn btn-warning">Edit Booking</a>
    <form action="{{ route('booking.destroy', $booking) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');">Delete</button>
    </form>
</div>
@endsection