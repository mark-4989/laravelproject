@extends('layout.app')

@section('content')
<div class="container">
    <h1>Edit Booked Room</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('booking.update', $booking) }}" method="POST">
        @csrf
        @method('PUT')
       
        <div class="mb-3">
            <label for="name" class="form-label">Full name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $booking->name) }}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" value="{{ old('email', $booking->email) }}" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="number" class="form-control" id="phone" name="phone" value="{{ old('phone', $booking->phone) }}" required>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type of Room</label>
            <input type="text" class="form-control" id="type" name="type" value="{{ old('type', $booking->type) }}" required>
        </div>
        <div class="mb-3">
            <label for="nroom" class="form-label">Number of Rooms</label>
            <input type="number" class="form-control" id="nroom" name="nroom" value="{{ old('nroom', $booking->nroom) }}" required>
        </div>
        <div class="mb-3">
            <label for="ndays" class="form-label">Duration</label>
            <input type="date" class="form-control" id="ndays" name="ndays" value="{{ old('ndays', $booking->ndays) }}" required>
        </div>
      
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection