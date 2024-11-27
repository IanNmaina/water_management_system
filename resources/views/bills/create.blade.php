@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create New Billing</h1>
    <form action="{{ route('bills.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="client_id">Select Client:</label>
            <select name="client_id" id="client_id" class="form-control" required>
                <option value="">-- Select Client --</option>
                @foreach ($clients as $client)
                <option value="{{ $client->id }}">{{ $client->first_name }} {{ $client->last_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="current_reading">Current Meter Reading:</label>
            <input type="number" name="current_reading" id="current_reading" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="rate">Rate (per unit):</label>
            <input type="number" step="0.01" name="rate" id="rate" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
        <a href="{{ route('bills.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
