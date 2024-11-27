@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Water Bills</h1>
    <div class="mb-3">
        <a href="{{ route('bills.create') }}" class="btn btn-success">Add New Bill</a>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Client Name</th>
                    <th>Meter Number</th>
                    <th>Current Reading</th>
                    <th>Amount Due (Ksh)</th>
                    <th>Billing Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($bills as $bill)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $bill->client->first_name }} {{ $bill->client->last_name }}</td>
                        <td>{{ $bill->client->meter_number }}</td>
                        <td>{{ $bill->current_reading }}</td>
                        <td>{{ number_format($bill->amount_due, 2) }}</td>
                        <td>{{ $bill->billing_date->format('d-m-Y') }}</td>
                        <td>
                            <a href="{{ route('bills.show', $bill->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('bills.edit', $bill->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('bills.destroy', $bill->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this bill?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center">No bills found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
