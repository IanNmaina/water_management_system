@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Clients</h1>
    <a href="{{ route('clients.create') }}" class="btn btn-primary mb-3">Add New Client</a>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Contact</th>
                <th>Meter Number</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
                <tr>
                    <td>{{ $client->id }}</td>
                    <td>{{ $client->first_name }}</td>
                    <td>{{ $client->last_name }}</td>
                    <td>{{ $client->contact }}</td>
                    <td>{{ $client->meter_number }}</td>
                    <td>{{ $client->status }}</td>
                    <td>
                        <a href="{{ route('clients.show', $client->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('clients.destroy', $client->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
