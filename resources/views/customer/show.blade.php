@extends('layouts.app')

@section('title', 'Customer Show' )

{{-- @section('sidebar')
@parent

<p>This is appended to the master sidebar.</p>
@endsection --}}

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-6 col-sm-6">
            @if (session()->has('message'))
                <h1>{{ session()->get('message') }}</h1>
            @endif
        </div>
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header card-header-success d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="card-title">Customer Stats</h4>
                        <p class="card-category">New employees on 15th September, 2016</p>
                    </div>
                    <div>
                        <a href="{{ route('customer.edit', $customer->user_id) }}" class="btn btn-primary btn-sm">Edit Details</a>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <div class="row p-4 text-center">
                        <div class="col-lg-6">
                            <label for="name">Name: <strong>{{ $customer->user->name }}</strong></label>
                        </div>
                        <div class="col-lg-6">
                            <label for="name">Email Address: <strong>{{ $customer->user->email }}</strong></label>
                        </div>
                    </div>
                    <div class="row p-4 text-center">
                        <div class="col-lg-6">
                            <label for="name">User Type: <strong>{{ $customer->user->user_type }}</strong></label>
                        </div>
                        <div class="col-lg-6">
                            <label for="name">Branch: <strong>{{ $customer->user->branch }}</strong></label>
                        </div>
                    </div>
                    <div class="row p-4 text-center">
                        <div class="col-lg-6">
                            <label for="name">Phone: <strong>{{ $customer->phone }}</strong></label>
                        </div>
                        <div class="col-lg-6">
                            <label for="name">Address: <strong>{{ $customer->address }}</strong></label>
                        </div>

                        </div>
                    </div>
                    <div class="row p-4 text-center">
                        <div class="col-lg-6">
                            <label for="name">Government ID Type: <strong>{{ $customer->govt_id_type }}</strong></label>
                        </div>
                        <div class="col-lg-6">
                            <label for="name">Government ID Number: <strong>{{ $customer->govt_id_number }}</strong></label>
                        </div>
                    </div>
                    <div class="row p-4 text-center">
                        <div class="col-lg-6">
                            <label for="name">UpLine: <strong>{{ ($upline) ? $upline->name : 'N/A' }}</strong></label>
                        </div>
                        <div class="col-lg-6">
                            <label for="name">Downline: <strong>{{ $downline->count() }}</strong></label>
                        </div>
                    </div>
                    <div class="row p-4 text-center">
                        <div class="col-lg-6">
                            <label for="name">Points: <strong>{{ $customer->points }}</strong></label>
                        </div>
                        <div class="col-lg-6">
                            <label for="name">Code: <strong>{{ $customer->code->code }}</strong></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    </div>
@endsection


