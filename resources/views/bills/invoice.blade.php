@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Water Bill Invoice</h1>
    <div class="card">
        <div class="card-header">
            <strong>Invoice Details</strong>
        </div>
        <div class="card-body">
            <p><strong>Client Name:</strong> {{ $bill->client->first_name }} {{ $bill->client->last_name }}</p>
            <p><strong>Contact:</strong> {{ $bill->client->contact }}</p>
            <p><strong>Address:</strong> {{ $bill->client->address }}</p>
            <hr>
            <p><strong>Meter Number:</strong> {{ $bill->client->meter_number }}</p>
            <p><strong>Previous Reading:</strong> {{ $bill->client->first_reading }}</p>
            <p><strong>Current Reading:</strong> {{ $bill->current_reading }}</p>
            <p><strong>Rate (per unit):</strong> {{ $bill->rate }}</p>
            <hr>
            <h4><strong>Total Amount Due:</strong> Ksh {{ number_format($bill->amount_due, 2) }}</h4>
            <p><strong>Billing Date:</strong> {{ $bill->billing_date->format('d-m-Y') }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('bills.index') }}" class="btn btn-secondary">Back to Bills</a>
            <a href="#" class="btn btn-primary" onclick="window.print()">Print Invoice</a>
        </div>
    </div>
</div>
@endsection
