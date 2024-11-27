@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card mb-4">
        <div class="card-header">
            <h2>Welcome to Little More Water Billing System - WBMS</h2>
        </div>
        <div class="card-body">
            <div class="row text-center">
                <div class="col-md-4 mb-3">
                    <a href="{{ route('clients.index') }}" class="btn btn-secondary w-100">Users</a>
                </div>
                <div class="col-md-4 mb-3">
                    <a href="{{ route('clients.create') }}" class="btn btn-primary w-100">Add New</a>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card p-2">
                        <h5>Pending Bills</h5>

                    </div>
                </div>
            </div>
            <div class="mt-4">
                <img src="{{ asset('assets/images/wbms.jpg') }}" class="img-fluid" alt="Water Image">
            </div>
        </div>
    </div>
</div>
@endsection
