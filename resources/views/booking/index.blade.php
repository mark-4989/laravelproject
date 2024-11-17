@extends('layout.app')

@section('content')
<div class="container">
    <h1>Bookings</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('booking.create') }}" class="btn btn-primary mb-3">Book A 
        Room
    </a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Type of Room</th>
                <th>Number of Rooms</th>
                <th>Number of Days</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($booking as $bookings)
                <tr>
                    <td>{{ $bookings->id }}</td>
                    <td>{{ $bookings->name}}</td>
                    <td>{{ $bookings->email}}</td>
                    <td>{{ $bookings->phone}}</td>
                    <td>{{ $bookings->troom}}</td>
                    <td>{{ $bookings->nroom}}</td>
                    <td>{{ $bookings->ndays}}</td>
                    <td>
                        <a href="{{ route('booking.show', $bookings) }}" class="btn btn-info">View</a>
                        <a href="{{ route('booking.edit', $bookings) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('booking.destroy', $bookings) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection