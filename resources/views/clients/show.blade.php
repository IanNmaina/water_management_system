@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Client Details</h1>
    <ul>
        <li><strong>First Name:</strong> {{ $client->first_name }}</li>
        <li><strong>Last Name:</strong> {{ $client->last_name }}</li>
        <li><strong>Contact:</strong> {{ $client->contact }}</li>
        <li><strong>Address:</strong> {{ $client->address }}</li>
        <li><strong>Meter Number:</strong> {{ $client->meter_number }}</li>
        <li><strong>First Reading:</strong> {{ $client->first_reading }}</li>
        <li><strong>Status:</strong> {{ $client->status }}</li>
    </ul>
    <a href="{{ route('clients.index') }}" class="btn btn-secondary">Back to Clients</a>
</div>
@endsection
