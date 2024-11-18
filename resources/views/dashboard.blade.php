@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card mb-4">
        <div class="card-header">
            <h2>Welcome to Little More Water Billing System - WBMS</h2>
        </div>
        <div class="card-body">
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5>Categories</h5>
                            <p>{{ $categoriesCount }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">

                            <a href="{{ route('clients.create') }}" class="btn btn-primary">Users</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5>Pending Bills</h5>
                            <p>{{ $pendingBills }}</p>
                        </div>
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
