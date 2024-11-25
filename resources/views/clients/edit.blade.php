@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Client</h1>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('clients.update', $client->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="first_name" class="form-label">First Name</label>
            <input type="text" name="first_name" id="first_name" class="form-control @error('first_name') is-invalid @enderror" value="{{ old('first_name', $client->first_name) }}">
            @error('first_name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="last_name" class="form-label">Last Name</label>
            <input type="text" name="last_name" id="last_name" class="form-control @error('last_name') is-invalid @enderror" value="{{ old('last_name', $client->last_name) }}">
            @error('last_name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="contact" class="form-label">Contact</label>
            <input type="text" name="contact" id="contact" class="form-control @error('contact') is-invalid @enderror" value="{{ old('contact', $client->contact) }}">
            @error('contact')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <textarea name="address" id="address" class="form-control @error('address') is-invalid @enderror">{{ old('address', $client->address) }}</textarea>
            @error('address')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="meter_number" class="form-label">Meter Number</label>
            <input type="text" name="meter_number" id="meter_number" class="form-control @error('meter_number') is-invalid @enderror" value="{{ old('meter_number', $client->meter_number) }}">
            @error('meter_number')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="first_reading" class="form-label">First Reading</label>
            <input type="number" name="first_reading" id="first_reading" class="form-control @error('first_reading') is-invalid @enderror" value="{{ old('first_reading', $client->first_reading) }}">
            @error('first_reading')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-control @error('status') is-invalid @enderror">
                <option value="active" {{ old('status', $client->status) == 'active' ? 'selected' : '' }}>Active</option>
                <option value="inactive" {{ old('status', $client->status) == 'inactive' ? 'selected' : '' }}>Inactive</option>
            </select>
            @error('status')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update Client</button>
        <a href="{{ route('clients.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
